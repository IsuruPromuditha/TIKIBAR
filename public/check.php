<?php
$dir = realpath(__DIR__ . '/../includes');
echo 'Looking in: ' . ($dir ?: 'FOLDER NOT FOUND') . '<br><br>';
if ($dir) {
    foreach (scandir($dir) as $f) {
        echo htmlspecialchars($f) . '<br>';
    }
}