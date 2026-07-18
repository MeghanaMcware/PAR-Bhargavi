<?php
$files = [
    'resources/views/admin/patient/partials/blood.blade.php',
    'resources/views/admin/patient/partials/pusculture.blade.php',
    'resources/views/admin/patient/partials/urineculture.blade.php'
];

foreach($files as $file) {
    $c = file_get_contents($file);
    
    // Remove the UHID div block entirely
    // Match the div that contains 'UHID' label and name="uhid" input
    $c = preg_replace('/<div[^>]*>\s*<label[^>]*>UHID.*?<\/div>/s', '', $c);
    
    file_put_contents($file, $c);
}
