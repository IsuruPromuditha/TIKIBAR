<section id="drinks" class="max-w-6xl mx-auto py-16 px-4">
  <h2 class="text-3xl font-bold text-center">Sip the Sunset</h2>
  <div class="flex justify-center gap-3 my-8" id="drink-tabs">
    <button data-cat="cocktails" class="tab active">Cocktails</button>
    <button data-cat="mocktails" class="tab">Mocktails</button>
    <button data-cat="beverages" class="tab">Beverages</button>
  </div>
  <div id="drink-cards" class="grid grid-cols-2 md:grid-cols-4 gap-6"></div>
  <p class="text-center mt-8"><a href="<?= BASE_URL ?>public/beverages.php">View full menu →</a></p>
</section>