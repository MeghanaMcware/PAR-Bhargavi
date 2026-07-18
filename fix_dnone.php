<?php
$files = [
    'resources/views/admin/patient/partials/seriallab.blade.php',
    'resources/views/admin/patient/partials/pusculture.blade.php',
    'resources/views/admin/patient/partials/urineculture.blade.php',
    'resources/views/admin/patient/partials/blood.blade.php'
];

foreach ($files as $f) {
    if (!file_exists($f)) continue;
    
    $c = file_get_contents($f);
    
    // Replace the stray <div class="d-none"> with nothing
    $c = str_replace('<div class="d-none">', '', $c);
    
    file_put_contents($f, $c);
    echo "Fixed $f\n";
}
