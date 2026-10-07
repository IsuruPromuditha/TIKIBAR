</main>
<footer class="bg-ocean-900 text-white">
  <div class="wave text-sand"><!-- optional wave SVG --></div>
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-4 py-14">
    <div>
      <h3 class="font-display text-2xl tracking-widest">TIKIBAR</h3>
      <p class="font-script text-2xl text-sunset-gold mt-2"><?= e(TAGLINE) ?></p>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Visit Us</h4>
      <p class="text-white/70 text-sm">Address, phone and email from site_settings</p>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Follow</h4>
      <p class="text-white/70 text-sm">Instagram · Facebook · TripAdvisor</p>
    </div>
  </div>
  <p class="text-center text-white/50 text-xs py-4 border-t border-white/10">© <?= date('Y') ?> TIKIBAR</p>
</footer>

<script>const BASE_URL = "<?= BASE_URL ?>";</script>
<script src="<?= asset('js/main.js') ?>"></script>
<?php foreach (($pageScripts ?? []) as $js): ?>
  <script src="<?= asset('js/' . $js) ?>"></script>
<?php endforeach; ?>
</body></html>