<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$pageTitle = 'TIKIBAR | ' . TAGLINE;
$base = __DIR__ . '/../includes/partials/';

include $base . 'header.php';
include $base . 'home/hero.php';
include $base . 'home/drinks.php';
include $base . 'home/villas.php';
include $base . 'home/testimonials.php';
include $base . 'footer.php';