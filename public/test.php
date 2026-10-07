<?php
echo 'includes folder: ' . (is_dir(__DIR__.'/../includes') ? 'OK' : 'MISSING') . '<br>';
foreach (['config.php','db.php','functions.php','partials/header.php','partials/footer.php'] as $f) {
    echo $f . ': ' . (file_exists(__DIR__.'/../includes/'.$f) ? 'OK' : 'MISSING') . '<br>';
}