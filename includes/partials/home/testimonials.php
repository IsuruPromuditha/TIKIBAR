<?php $reviews = $pdo->query("SELECT * FROM testimonials WHERE is_approved=1 ORDER BY created_at DESC LIMIT 6")->fetchAll(); ?>
<section class="max-w-6xl mx-auto py-16 px-4">
  <h2 class="text-3xl font-bold text-center">Stories from Our Guests</h2>
  <div class="grid md:grid-cols-3 gap-8 mt-10">
    <?php foreach ($reviews as $r): ?>
      <figure class="bg-white rounded-2xl shadow p-6 text-center">
        <img loading="lazy" src="<?= e($r['photo_url']) ?>" alt="<?= e($r['guest_name']) ?>"
             class="w-24 h-24 rounded-full object-cover mx-auto">
        <div class="text-yellow-400 mt-3"><?= str_repeat('★', (int)$r['rating']) ?></div>
        <blockquote class="mt-3 text-gray-600">“<?= e($r['review']) ?>”</blockquote>
        <figcaption class="mt-3 font-semibold"><?= e($r['guest_name']) ?>
          <span class="block text-sm font-normal text-gray-400"><?= e($r['country']) ?></span>
        </figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>