<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($pageTitle ?? TIKIBAR) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- paste the tailwind.config block from section 1 here -->
  <link rel="stylesheet" href="<?= asset('css/custom.css') ?>">
</head>
<body class="font-body antialiased">

<header id="nav" class="glass fixed top-0 inset-x-0 z-50">
  <div class="max-w-6xl mx-auto flex items-center justify-between px-4 py-4 text-white">
    <a href="<?= BASE_URL ?>public/index.php" class="font-display text-2xl tracking-[.3em]">TIKIBAR</a>
    <nav class="hidden md:flex gap-8 text-sm uppercase tracking-wider">
      <a href="<?= BASE_URL ?>public/index.php"     class="hover:text-sunset-gold">Home</a>
      <a href="<?= BASE_URL ?>public/about.php"     class="hover:text-sunset-gold">About</a>
      <a href="<?= BASE_URL ?>public/beverages.php" class="hover:text-sunset-gold">Drinks</a>
      <a href="<?= BASE_URL ?>public/rooms.php"     class="hover:text-sunset-gold">Villas</a>
      <a href="<?= BASE_URL ?>public/team.php"      class="hover:text-sunset-gold">Team</a>
    </nav>
    <a href="<?= BASE_URL ?>public/rooms.php" class="hidden md:inline-block sunset-gradient px-6 py-2 rounded-full text-sm font-medium">Book Now</a>
    <button id="menu-btn" class="md:hidden text-3xl" aria-label="Menu">☰</button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-ocean-900/95 text-white px-4 pb-4 space-y-3">
    <a href="<?= BASE_URL ?>public/index.php" class="block">Home</a>
    <a href="<?= BASE_URL ?>public/about.php" class="block">About</a>
    <a href="<?= BASE_URL ?>public/beverages.php" class="block">Drinks</a>
    <a href="<?= BASE_URL ?>public/rooms.php" class="block">Villas</a>
    <a href="<?= BASE_URL ?>public/team.php" class="block">Team</a>
  </div>
</header>
<main>