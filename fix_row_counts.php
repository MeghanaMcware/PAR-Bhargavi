<?php
$files = [
    'resources/views/admin/patient/edit.blade.php',
    'resources/views/admin/patient/create.blade.php'
];

foreach ($files as $f) {
    if (!file_exists($f)) continue;
    $c = file_get_contents($f);

    // Remove the old variable declarations
    $c = preg_replace('/let pusCultureRowCount = 0;/', '', $c);
    $c = preg_replace('/let urineCultureRowCount = 0;/', '', $c);
    $c = preg_replace('/let bloodCultureRowCount = 0;/', '', $c);
    
    // Insert the new global variable
    $c = preg_replace('/let serialLabRowCount = 0;/', "let serialLabRowCount = 0;\n        let globalCultureRowCount = 0;", $c);
    
    // Replace all usages
    $c = str_replace('pusCultureRowCount', 'globalCultureRowCount', $c);
    $c = str_replace('urineCultureRowCount', 'globalCultureRowCount', $c);
    $c = str_replace('bloodCultureRowCount', 'globalCultureRowCount', $c);
    
    file_put_contents($f, $c);
    echo "Fixed $f\n";
}
