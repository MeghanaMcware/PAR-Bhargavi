<?php
$f = 'resources/views/admin/patient/edit.blade.php';
$c = file_get_contents($f);
$balance = substr_count($c, '<div') - substr_count($c, '</div');
echo "edit.blade.php balance: $balance\n";
