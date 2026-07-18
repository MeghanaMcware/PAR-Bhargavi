<?php
$f = 'resources/views/admin/patient/edit.blade.php';
$c = file_get_contents($f);

// Fix missing </div> for step1 and step2
$step1 = <<<HTML
                        <div class="card shadow-lg border-0">

                           @include('admin.patient.partials.basicdetails')
                        </div>
HTML;
$step1Fix = <<<HTML
                        <div class="card shadow-lg border-0">

                           @include('admin.patient.partials.basicdetails')
                        </div>
                    </div>
HTML;
$c = str_replace($step1, $step1Fix, $c);

$step2 = <<<HTML
                        <div class="step-content" id="step2">

                           @include('admin.patient.partials.clinicalassessment')
                        </div>
HTML;
$step2Fix = <<<HTML
                        <div class="step-content" id="step2">

                           @include('admin.patient.partials.clinicalassessment')
                        </div>
                    </div>
HTML;
$c = str_replace($step2, $step2Fix, $c);

file_put_contents($f, $c);
echo "Fixed edit.blade.php steps!\n";
