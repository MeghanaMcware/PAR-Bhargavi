<?php

$partialsDir = __DIR__ . '/resources/views/admin/patient/partials/';
$files = glob($partialsDir . '*.blade.php');

$fields = [];
$missingValueBindings = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    // Find all name attributes in input, select, textarea
    preg_match_all('/(?:<input|<select|<textarea)[^>]*?name="([^"]+)"[^>]*>/i', $content, $matches, PREG_SET_ORDER);
    
    foreach ($matches as $match) {
        $tag = $match[0];
        $name = $match[1];
        
        // Skip some system or array fields for now if we want, but let's capture all
        if (!isset($fields[$name])) {
            $fields[$name] = [];
        }
        $fields[$name][] = basename($file);
        
        // Check for value binding. Selects and Textareas bind differently, but inputs should have value="...old("
        // But let's just do a basic check
        if (stripos($tag, '<input') !== false) {
            // Check if it's type radio or checkbox, they bind with 'checked'
            if (stripos($tag, 'type="radio"') === false && stripos($tag, 'type="checkbox"') === false && stripos($tag, 'type="file"') === false) {
                if (stripos($tag, 'value="') === false && stripos($tag, 'value=') === false) {
                    $missingValueBindings[] = "Missing value attribute for input '$name' in " . basename($file);
                } elseif (stripos($tag, 'old(') === false && stripos($tag, 'old (') === false) {
                    // It has value attribute but no old() binding
                    // Wait, sometimes value is bound differently, let's just flag it
                    $missingValueBindings[] = "Missing old() binding for input '$name' in " . basename($file);
                }
            }
        }
        
        if (stripos($tag, '<select') !== false) {
            // Selects usually have a loop or hardcoded options with ternary old() check
            // Too complex to parse with regex reliably here, but let's see if the word old is nearby
            // Actually let's skip selects for value check, just check inputs.
        }
    }
}

echo "=== Missing Value Bindings ===\n";
foreach ($missingValueBindings as $msg) {
    echo $msg . "\n";
}

echo "\n=== All Found Fields ===\n";
foreach ($fields as $name => $filesFound) {
    echo $name . " (in " . implode(', ', array_unique($filesFound)) . ")\n";
}

