<?php
foreach(glob('resources/views/admin/patient/partials/*.blade.php') as $f) {
    if (basename($f) === 'basicdetails.blade.php') {
        // Special case: we know basicdetails was missing 1 closing tag. Let's just fix it.
        $c = file_get_contents($f);
        if ((substr_count($c, '<div') - substr_count($c, '</div')) < 0) {
            // Already negative? Wait, before it was -1. That means it had 1 EXTRA closing tag.
            // Wait, -1 means 1 extra </div. 
        }
    }
    
    $c = file_get_contents($f);
    $balance = substr_count($c, '<div') - substr_count($c, '</div');
    
    if ($balance > 0) {
        // Add closing tags
        for ($i = 0; $i < $balance; $i++) {
            $c .= "\n</div>\n";
        }
        file_put_contents($f, $c);
        echo "Added $balance closing tags to $f\n";
    } else if ($balance < 0) {
        // Remove extra closing tags from the END of the file
        $extra = abs($balance);
        for ($i = 0; $i < $extra; $i++) {
            // Find the last </div> and remove it
            $pos = strrpos($c, '</div>');
            if ($pos !== false) {
                $c = substr_replace($c, '', $pos, 6);
            }
        }
        file_put_contents($f, $c);
        echo "Removed $extra closing tags from $f\n";
    } else {
        echo "$f is balanced.\n";
    }
}
