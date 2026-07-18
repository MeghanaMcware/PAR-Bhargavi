<?php
$file = 'resources/views/admin/patient/partials/pusculture.blade.php';
$c = file_get_contents($file);
preg_match_all('/<select[^>]*name="([^"]+)"/', $c, $m);
print_r($m[1]);
