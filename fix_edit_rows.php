<?php
$files = [
    'resources/views/admin/patient/edit.blade.php',
    'resources/views/admin/patient/create.blade.php'
];

foreach ($files as $f) {
    if (!file_exists($f)) continue;
    
    $c = file_get_contents($f);
    
    // Replace the buggy assignment block in all edit*Row functions
    $oldBlock = <<<JS
                if (field && cellValue !== 'N/A') {
                    field.value = cellValue;
                }
JS;
    
    $newBlock = <<<JS
                if (field) {
                    field.value = (cellValue !== 'N/A') ? cellValue : '';
                }
JS;
    
    $c = str_replace($oldBlock, $newBlock, $c);
    
    // Wait, let's also make sure `document.querySelector('#stepX')` is correct for the modals.
    // The modals are NO LONGER inside `#stepX`! They are completely separate in the DOM!
    // Oh my gosh! In `seriallab.blade.php`, the modal is defined inside `<div class="card-body">` which IS inside `#step3`. 
    // Yes, the partial is included INSIDE `#stepX`. So `form.querySelector('[name="..."]')` will find it!
    
    file_put_contents($f, $c);
    echo "Fixed $f\n";
}
