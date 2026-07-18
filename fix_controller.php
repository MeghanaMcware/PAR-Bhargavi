<?php
$f = 'app/Http/Controllers/Admin/PatientController.php';
$c = file_get_contents($f);

// Fix Serial Labs Update
$oldSerialLabsUpdate = <<<PHP
            // 3. Update Serial Labs (Full replacement for simplicity)
            if (\$request->has('serial_labs') && is_array(\$request->serial_labs)) {
                \$patient->serialLabs()->delete();
                foreach (\$request->serial_labs as \$lab) {
                    \$patient->serialLabs()->create(\$lab);
                }
            }
PHP;

$newSerialLabsUpdate = <<<PHP
            // 3. Update Serial Labs (Full replacement for simplicity)
            \$patient->serialLabs()->delete(); // ALWAYS delete to allow clearing the table
            if (\$request->has('serial_labs') && is_array(\$request->serial_labs)) {
                foreach (\$request->serial_labs as \$lab) {
                    \$patient->serialLabs()->create(\$lab);
                }
            }
PHP;
$c = str_replace($oldSerialLabsUpdate, $newSerialLabsUpdate, $c);

// Fix Cultures Update
$oldCulturesUpdate = <<<PHP
            // 4. Update Cultures (Full replacement for simplicity)
            if (\$request->has('cultures') && is_array(\$request->cultures)) {
                \$patient->cultures()->delete();
                foreach (\$request->cultures as \$cultureData) {
PHP;

$newCulturesUpdate = <<<PHP
            // 4. Update Cultures (Full replacement for simplicity)
            \$patient->cultures()->delete(); // ALWAYS delete to allow clearing the table
            if (\$request->has('cultures') && is_array(\$request->cultures)) {
                foreach (\$request->cultures as \$cultureData) {
PHP;
$c = str_replace($oldCulturesUpdate, $newCulturesUpdate, $c);

file_put_contents($f, $c);
echo "Fixed PatientController.php\n";
