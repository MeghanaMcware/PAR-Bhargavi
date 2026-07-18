<?php

$files = [
    'resources/views/admin/patient/partials/pusculture.blade.php' => ['index' => 0, 'type' => 'culture', 'specimen' => 'Pus'],
    'resources/views/admin/patient/partials/urineculture.blade.php' => ['index' => 1, 'type' => 'culture', 'specimen' => 'Urine'],
    'resources/views/admin/patient/partials/blood.blade.php' => ['index' => 2, 'type' => 'culture', 'specimen' => 'Blood'],
    'resources/views/admin/patient/partials/seriallab.blade.php' => ['index' => 0, 'type' => 'lab']
];

foreach ($files as $file => $meta) {
    $content = file_get_contents($file);
    $type = $meta['type'];
    $idx = $meta['index'];
    
    // Replace standard inputs and selects
    // We will do a callback to process each tag
    $content = preg_replace_callback('/(<(?:input|select|textarea)[^>]*?name=")([^"]+)("[^>]*>)/i', function($matches) use ($type, $idx, $meta) {
        $prefix = $matches[1];
        $oldName = $matches[2];
        $suffix = $matches[3];
        $fullTag = $matches[0];
        
        // Skip hidden token or method if any
        if ($oldName === '_token' || $oldName === '_method' || $oldName === 'save_progress') {
            return $fullTag;
        }

        // --- CULTURES ---
        if ($type === 'culture') {
            // Map old day names to standard 'day'
            if (in_array($oldName, ['urineday', 'pusday', 'bloodday', 'day'])) {
                $newName = "cultures[$idx][day]";
                $valKey = "cultures.$idx.day";
                $dbField = "day";
            } elseif (in_array($oldName, ['testing_date', 'organism_name', 'specimen_type', 'uhid'])) {
                $newName = "cultures[$idx][$oldName]";
                $valKey = "cultures.$idx.$oldName";
                $dbField = $oldName;
            } else {
                // It's an antibiotic!
                // Wait, this script needs to keep track of sensitivity index per file.
                // It's easier to just name them like cultures[0][sensitivities][Amikacin] 
                // But Laravel expects an array of arrays!
                // Actually, if we do cultures[0][sensitivities][0][result], we have to inject the hidden input.
                // For simplicity, let's inject a special tag that we will parse in a second pass.
                return "@@ANTIBIOTIC:$oldName@@" . $fullTag;
            }
            
            // Add value binding if not present
            if (stripos($fullTag, '<input') !== false && stripos($fullTag, 'type="file"') === false && stripos($fullTag, 'type="radio"') === false && stripos($fullTag, 'type="checkbox"') === false) {
                if (stripos($fullTag, 'value="') === false && stripos($fullTag, 'value=') === false) {
                    // Inject value before placeholder or at end
                    // E.g. cultures[0]
                    $valueBinding = ' value="{{ old(\'' . $valKey . '\', isset($patient) && isset($patient->cultures['.$idx.']) ? $patient->cultures['.$idx.']->' . $dbField . ' : \'\') }}" ';
                    if (strpos($suffix, 'placeholder=') !== false) {
                        $suffix = str_replace('placeholder=', $valueBinding . 'placeholder=', $suffix);
                    } else {
                        $suffix = rtrim($suffix, '>') . $valueBinding . '>';
                    }
                }
            }
            
            return $prefix . $newName . $suffix;
        }

        // --- SERIAL LABS ---
        if ($type === 'lab') {
            $newName = "serial_labs[$idx][$oldName]";
            $valKey = "serial_labs.$idx.$oldName";
            $dbField = $oldName;

            // Add value binding
            if (stripos($fullTag, '<input') !== false) {
                if (stripos($fullTag, 'value="') === false && stripos($fullTag, 'value=') === false) {
                    $valueBinding = ' value="{{ old(\'' . $valKey . '\', isset($patient) && isset($patient->serialLabs['.$idx.']) ? $patient->serialLabs['.$idx.']->' . $dbField . ' : \'\') }}" ';
                    if (strpos($suffix, 'placeholder=') !== false) {
                        $suffix = str_replace('placeholder=', $valueBinding . 'placeholder=', $suffix);
                    } else {
                        $suffix = rtrim($suffix, '>') . $valueBinding . '>';
                    }
                }
            }
            return $prefix . $newName . $suffix;
        }

        return $fullTag;
    }, $content);

    // Second pass for antibiotics
    $sensIdx = 0;
    $content = preg_replace_callback('/@@ANTIBIOTIC:([^@]+)@@(<select[^>]*?name=")([^"]+)("[^>]*>)/i', function($matches) use ($idx, &$sensIdx, $meta) {
        $antibioticName = ucfirst(str_replace('_', ' ', $matches[1])); // "Amikacin", "Amox clav"
        
        $newName = "cultures[$idx][sensitivities][$sensIdx][result]";
        $valKey = "cultures.$idx.sensitivities.$sensIdx.result";
        
        // Inject hidden input for the name
        $hidden = '<input type="hidden" name="cultures['.$idx.'][sensitivities]['.$sensIdx.'][antibiotic_name]" value="'.$antibioticName.'">' . "\n";
        
        // Wait, what about old() bindings for selects?
        // It's too hard to modify all <option> tags via regex. We can leave select old bindings out for now, 
        // OR we can inject a blade script that auto-selects them via JS later.
        
        $sensIdx++;
        
        return $hidden . $matches[2] . $newName . $matches[4];
    }, $content);

    // Add a hidden specimen_type for cultures if it doesn't exist
    if ($type === 'culture') {
        if (strpos($content, 'name="cultures['.$idx.'][specimen_type]"') === false) {
            $content = preg_replace('/<form[^>]*>|<div class="step-content"[^>]*>/i', '$0' . "\n" . '<input type="hidden" name="cultures['.$idx.'][specimen_type]" value="'.$meta['specimen'].'">', $content);
        }
    }

    file_put_contents($file, $content);
    echo "Refactored $file\n";
}

