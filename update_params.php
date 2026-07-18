<?php
$f = 'resources/views/admin/patient/edit.blade.php';
$c = file_get_contents($f);
$c = preg_replace('/function add(SerialLab|PusCulture|UrineCulture|BloodCulture)Data\(\) \{/', 'function add$1Data(silent = false) {', $c);
file_put_contents($f, $c);
