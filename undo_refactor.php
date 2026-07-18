<?php
$files = [
    'resources/views/admin/patient/partials/pusculture.blade.php',
    'resources/views/admin/patient/partials/urineculture.blade.php',
    'resources/views/admin/patient/partials/blood.blade.php',
    'resources/views/admin/patient/partials/seriallab.blade.php'
];

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Reverse value="{{ old(...) }}"
    $content = preg_replace('/ value="{{ old\([^}]+\) }}" /', ' ', $content);
    
    // Reverse name="cultures[0][day]" to name="day"
    $content = preg_replace('/name="cultures\[\d+\]\[([^\]]+)\]"/', 'name="$1"', $content);
    $content = preg_replace('/name="serial_labs\[\d+\]\[([^\]]+)\]"/', 'name="$1"', $content);
    
    // Reverse hidden inputs for sensitivities
    $content = preg_replace('/<input type="hidden" name="cultures\[\d+\]\[sensitivities\]\[\d+\]\[antibiotic_name\]" value="([^"]+)">\s*/', '', $content);
    
    // Reverse select names for sensitivities (this regex is a bit tricky, but wait...)
    // Wait, earlier I did name="cultures[0][sensitivities][0][result]"
    // But the original names were like amikacin, amox_clav.
    // Let me just manually git checkout them and fix the save buttons.
}
