<?php
$f = 'resources/views/admin/patient/create.blade.php';
$c = file_get_contents($f);
$balance = substr_count($c, '<div') - substr_count($c, '</div');
echo "create.blade.php balance: $balance\n";
