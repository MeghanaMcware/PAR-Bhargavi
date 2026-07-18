<?php
function updateStepperCss($filename) {
    $f = "resources/views/admin/patient/$filename";
    $c = file_get_contents($f);

    $oldCss = <<<CSS
        .step {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #dee2e6;
            color: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: relative;
            margin: 0 35px;
            transition: .3s;
        }
        .step span {
            position: absolute;
            top: 60px;
            font-size: 13px;
            white-space: nowrap;
        }
        .step.active {
            background: #0d6efd;
            color: #fff;
        }
        .step.completed {
            background: #198754;
            color: #fff;
        }
        .step::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background: #dee2e6;
            left: 50px;
            top: 24px;
        }

        .step:last-child::after {
            display: none;
        }
        .step.completed::after {
            background: #198754;
        }
CSS;

    $newCss = <<<CSS
        .step {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f1f5f9;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            margin: 0 45px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
            border: 2px solid #e2e8f0;
            z-index: 2;
        }
        .step span {
            position: absolute;
            top: 55px;
            font-size: 14px;
            font-weight: 600;
            color: #64748b;
            white-space: nowrap;
            transition: all 0.3s;
        }
        .step.active {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: #fff;
            border-color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
            transform: scale(1.1);
        }
        .step.active span {
            color: #1e40af;
        }
        .step.completed {
            background: linear-gradient(135deg, #10b981, #059669);
            color: #fff;
            border-color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        .step.completed span {
            color: #059669;
        }
        .step::after {
            content: '';
            position: absolute;
            width: 90px;
            height: 4px;
            background: #e2e8f0;
            left: 45px;
            top: 18px;
            z-index: -1;
            transition: all 0.4s;
        }
        .step:last-child::after {
            display: none;
        }
        .step.completed::after {
            background: #10b981;
        }
CSS;

    $c = str_replace($oldCss, $newCss, $c);

    // Make the step content slide in cleanly
    $oldSlide = <<<CSS
        @keyframes slide {
            from {

                opacity: 0;
                transform: translateY(30px);
            }
            to {

                opacity: 1;
                transform: translateY(0);
            }
        }
CSS;

    $newSlide = <<<CSS
        @keyframes slide {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
CSS;

    $c = str_replace($oldSlide, $newSlide, $c);

    file_put_contents($f, $c);
    echo "Updated CSS in $filename\n";
}

updateStepperCss('edit.blade.php');
updateStepperCss('create.blade.php');
