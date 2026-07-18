<?php
$c = file_get_contents('resources/views/admin/patient/partials/urineculture.blade.php');
$lines = explode("\n", $c);
$balance = 0;
foreach($lines as $i => $line) {
    $opens = substr_count($line, '<div');
    $closes = substr_count($line, '</div');
    $balance += $opens - $closes;
    // Just show lines with unbalance
    if ($opens > 0 || $closes > 0) {
        echo str_pad($i+1, 4, ' ', STR_PAD_LEFT) . " | Bal: $balance | " . trim($line) . "\n";
    }
}
