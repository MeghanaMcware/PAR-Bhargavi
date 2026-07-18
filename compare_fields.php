<?php
$html = file_get_contents('resources/views/admin/patient/partials/clinicalassessment.blade.php');
preg_match_all('/name="([^"]+)"/', $html, $matches);
$html_names = $matches[1];

$controller = file_get_contents('app/Http/Controllers/Admin/PatientController.php');
preg_match_all('/\$request->only\(\[(.*?)\]\)/s', $controller, $m);
$str = str_replace(["'", "\n", "\r", " "], "", $m[1][1]);
$controller_names = explode(',', $str);

$missing_in_controller = array_diff($html_names, $controller_names);
$missing_in_html = array_diff($controller_names, $html_names);

echo "Missing in Controller:\n";
print_r($missing_in_controller);
echo "Missing in HTML:\n";
print_r($missing_in_html);
