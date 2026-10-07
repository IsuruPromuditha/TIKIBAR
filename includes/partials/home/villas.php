<?php
$in  = $_GET['check_in']  ?? date('Y-m-d');
$out = $_GET['check_out'] ?? date('Y-m-d', strtotime('+1 day'));
$stmt = $pdo->prepare("SELECT r.*, r.total_units - COUNT(b.id) AS units_left,
  (SELECT image_url FROM room_images WHERE room_id=r.id AND is_cover=1 LIMIT 1) AS cover
  FROM rooms r LEFT JOIN bookings b ON b.room_id=r.id
   AND b.status IN ('pending','confirmed') AND b.check_in < :o AND b.check_out > :i
  WHERE r.is_active=1 GROUP BY r.id ORDER BY r.is_featured DESC LIMIT 3");
$stmt->execute([':i'=>$in, ':o'=>$out]);
$villas = $stmt->fetchAll();

$am = $pdo->prepare("SELECT a.name,a.icon FROM amenities a
  JOIN room_amenities ra ON ra.amenity_id=a.id WHERE ra.room_id=?");
?>
<section id="villas" class="bg-orange-50 py-16 px-4">
  <h2 class="text-3xl font-bold text-center">Stay Near the Sunset</h2>
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mt-10">
  <?php foreach ($villas as $v): $am->execute([$v['id']]); ?>
    <article class="bg-white rounded-2xl shadow overflow-hidden">
      <img loading="lazy" src="<?= e($v['cover']) ?>" alt="<?= e($v['name']) ?>" class="h-56 w-full object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold"><?= e($v['name']) ?></h3>
        <p class="text-sm text-gray-500"><?= e($v['distance_text']) ?> · <?= $v['bedrooms'] ?> bed · <?= $v['capacity'] ?> guests</p>
        <ul class="flex flex-wrap gap-2 my-3 text-xs">
          <?php foreach ($am->fetchAll() as $a): ?>
            <li class="px-2 py-1 bg-gray-100 rounded"><?= e($a['name']) ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="flex justify-between items-center">
          <p class="font-bold"><?= money($v['price_per_night']) ?><span class="text-sm font-normal"> / night</span></p>
          <?php if ($v['units_left'] <= 0): ?>
            <span class="text-red-600 text-sm">Sold out</span>
          <?php else: ?>
            <span class="text-green-600 text-sm"><?= $v['units_left']==1 ? 'Only 1 left' : 'Available' ?></span>
          <?php endif; ?>
        </div>
        <a href="<?= BASE_URL ?>public/room-detail.php?slug=<?= e($v['slug']) ?>&check_in=<?= $in ?>&check_out=<?= $out ?>"
           class="block text-center mt-4 py-2 rounded-full bg-orange-500 text-white <?= $v['units_left']<=0 ? 'pointer-events-none opacity-50' : '' ?>">Book Now</a>
      </div>
    </article>
  <?php endforeach; ?>
  </div>
</section>