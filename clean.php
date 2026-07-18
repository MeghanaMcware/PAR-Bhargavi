<?php
$files = [
    'resources/views/admin/patient/partials/seriallab.blade.php',
    'resources/views/admin/patient/partials/pusculture.blade.php',
    'resources/views/admin/patient/partials/urineculture.blade.php',
    'resources/views/admin/patient/partials/blood.blade.php'
];
foreach($files as $f) {
    $c = file_get_contents($f);
    $c = str_replace('\n ', '', $c);
    
    // Remove the custom "Save" button block
    $c = preg_replace('/<button type="button" class="btn btn-success.*?<\/button>/s', '', $c);
    
    // In blood.blade.php, it's called "Blood Culture Save", in others it's similar
    
    // Just inject the correct Save Progress button next to Next button
    if (strpos($c, 'name="save_progress"') === false) {
        $c = str_replace('<button type="button" class="btn btn-primary px-4" onclick="nextStep()">', '<button type="submit" class="btn btn-success me-2" name="save_progress" value="true"><i class="fa fa-save"></i> Save Progress</button>' . "\n" . '                                                <button type="button" class="btn btn-primary px-4" onclick="nextStep()">', $c);
    }
    
    file_put_contents($f, $c);
}
