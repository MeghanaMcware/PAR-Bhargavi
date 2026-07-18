<?php

$files = [
    'resources/views/admin/patient/partials/basicdetails.blade.php',
    'resources/views/admin/patient/partials/clinicalassessment.blade.php'
];

foreach ($files as $fpath) {
    $content = file_get_contents($fpath);

    // Replace inputs
    $content = preg_replace_callback('/<input[^>]+name="([a-zA-Z0-9_]+)"[^>]*>/', function($matches) {
        $full_match = $matches[0];
        $name = $matches[1];
        
        if (strpos($full_match, 'value=') !== false) {
            $full_match = preg_replace('/value="[^"]*"/', 'value="{{ old(\''.$name.'\', $patient->'.$name.' ?? \'\') }}"', $full_match);
            $full_match = preg_replace("/value='[^']*'/", "value=\"{{ old('".$name."', \$patient->".$name." ?? '') }}\"", $full_match);
            return $full_match;
        } else {
            if (strpos($full_match, 'placeholder') !== false) {
                return str_replace('placeholder', 'value="{{ old(\''.$name.'\', $patient->'.$name.' ?? \'\') }}" placeholder', $full_match);
            } else {
                return str_replace('name="'.$name.'"', 'name="'.$name.'" value="{{ old(\''.$name.'\', $patient->'.$name.' ?? \'\') }}"', $full_match);
            }
        }
    }, $content);

    // Replace textareas
    $content = preg_replace_callback('/<textarea[^>]+name="([a-zA-Z0-9_]+)"[^>]*>(.*?)<\/textarea>/s', function($matches) {
        $full_match = $matches[0];
        $name = $matches[1];
        return preg_replace('/>.*?<\/textarea>/s', '>{{ old(\''.$name.'\', $patient->'.$name.' ?? \'\') }}</textarea>', $full_match);
    }, $content);
    
    // Replace selects (a bit tricky, we will inject a small snippet after each select to select the option via JS, or just leave it for now)
    
    file_put_contents($fpath, $content);
}

echo "Updated inputs and textareas!\n";
