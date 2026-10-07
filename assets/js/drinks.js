const box = document.getElementById('drink-cards');
async function loadDrinks(cat) {
  const r = await fetch(`${BASE_URL}api/beverages.php?category=${cat}&limit=4`);
  const items = await r.json();
  box.innerHTML = items.map(d => `
    <div class="rounded-xl shadow overflow-hidden bg-white">
      <img loading="lazy" src="${d.image_url}" alt="${d.name}" class="h-48 w-full object-cover">
      <div class="p-4">
        <h3 class="font-semibold">${d.name}</h3>
        <p class="text-sm text-gray-500 line-clamp-2">${d.description ?? ''}</p>
        <p class="mt-2 font-bold">LKR ${Number(d.price).toLocaleString()}</p>
      </div>
    </div>`).join('');
}
document.querySelectorAll('#drink-tabs .tab').forEach(b =>
  b.addEventListener('click', () => {
    document.querySelectorAll('#drink-tabs .tab').forEach(t => t.classList.remove('active'));
    b.classList.add('active');
    loadDrinks(b.dataset.cat);
  }));
loadDrinks('cocktails');