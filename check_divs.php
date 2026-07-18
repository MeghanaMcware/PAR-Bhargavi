<?php
foreach(glob('resources/views/admin/patient/partials/*.blade.php') as $f) {
    $c = file_get_contents($f);
    echo basename($f) . ': ' . (substr_count($c, '<div') - substr_count($c, '</div')) . "\n";
}
