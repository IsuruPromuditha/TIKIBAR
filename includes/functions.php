<?php
function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
function asset($p){ return BASE_URL . 'assets/' . ltrim($p,'/'); }
function money($n){ return 'LKR ' . number_format($n); }