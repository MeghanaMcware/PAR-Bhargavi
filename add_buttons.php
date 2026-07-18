<?php

$files = glob('resources/views/admin/patient/partials/*.blade.php');
foreach($files as $file) {
    $content = file_get_contents($file);
    
    // Add Save Progress button before nextStep() button
    $content = preg_replace(
        '/<button type="button" class="btn btn-primary([^"]*)" onclick="nextStep\(\)">/',
        '<button type="submit" class="btn btn-success me-2" name="save_progress" value="true"><i class="fa fa-save"></i> Save Progress</button>\n                                                <button type="button" class="btn btn-primary$1" onclick="nextStep()">',
        $content
    );
    
    // For the final step (Step 6), they probably have a "Submit" button
    // Let's check if there is a "Submit Patient Form" button
    
    file_put_contents($file, $content);
}
echo "Added Save Progress to partials.\n";
