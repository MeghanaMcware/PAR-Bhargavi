<?php
function refactorPartial($filename, $modalId, $modalTitle, $addFuncName, $openFuncName) {
    $f = "resources/views/admin/patient/partials/$filename";
    $c = file_get_contents($f);

    if (strpos($c, 'modal fade') !== false) return; // Already refactored

    $modalStart = <<<HTML
<!-- Modal -->
<div class="modal fade" id="$modalId" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">$modalTitle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
HTML;

    $c = str_replace('<div class="row">', $modalStart, $c);

    $modalEnd = <<<HTML
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="$addFuncName(false); var m = bootstrap.Modal.getInstance(document.getElementById('$modalId')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="$openFuncName()">
        <i class="bi bi-plus-circle me-1"></i> Add New Record
    </button>
</div>
<div class="d-none">
HTML;

    $c = str_replace('<div class="d-flex justify-content-end mb-3">', $modalEnd, $c);
    
    // Remove display:none from containers
    $c = preg_replace('/<div id="([^"]+TableContainer)" class="mt-4" style="display: none;">/', '<div id="$1" class="mt-4">', $c);
    
    file_put_contents($f, $c);
    echo "Refactored $filename\n";
}

refactorPartial('pusculture.blade.php', 'pusCultureModal', 'Pus Culture Entry', 'addPusCultureData', 'openPusCultureModal');
refactorPartial('urineculture.blade.php', 'urineCultureModal', 'Urine Culture Entry', 'addUrineCultureData', 'openUrineCultureModal');
refactorPartial('bloodculture.blade.php', 'bloodCultureModal', 'Blood Culture Entry', 'addBloodCultureData', 'openBloodCultureModal');

function updateJS($filename) {
    $f = "resources/views/admin/patient/$filename";
    $c = file_get_contents($f);

    $replacements = [
        ['addSerialLabData', 'openSerialLabModal', 'editSerialLabRow', 'serialLabModal', '#step3'],
        ['addPusCultureData', 'openPusCultureModal', 'editPusCultureRow', 'pusCultureModal', '#step4'],
        ['addUrineCultureData', 'openUrineCultureModal', 'editUrineCultureRow', 'urineCultureModal', '#step5'],
        ['addBloodCultureData', 'openBloodCultureModal', 'editBloodCultureRow', 'bloodCultureModal', '#step6']
    ];

    foreach ($replacements as $r) {
        $addFunc = $r[0];
        $openFunc = $r[1];
        $editFunc = $r[2];
        $modalId = $r[3];
        $stepId = $r[4];

        if (strpos($c, "function $openFunc") === false) {
            // Find fields definition
            preg_match("/function $addFunc\(.*?\)\s*\{\s*const form = document\.querySelector\('.*?'\);\s*const fields = (\[.*?\]);/s", $c, $m);
            if(isset($m[1])) {
                $fieldsArray = $m[1];
                $openFuncStr = <<<JS
        function $openFunc() {
            const form = document.querySelector('$stepId');
            const fields = $fieldsArray;
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="\${fieldName}"]`);
                if (field) field.value = '';
            });
            var m = new bootstrap.Modal(document.getElementById('$modalId'));
            m.show();
        }

JS;
                $c = preg_replace("/function $editFunc/", $openFuncStr . "        function $editFunc", $c);
            }
        }
        
        // Update edit func to show modal
        if (strpos($c, "'$modalId')).show()") === false) {
            $c = preg_replace("/(function $editFunc.*?row\.remove\(\);.*?)\}\s*function/s", "$1            new bootstrap.Modal(document.getElementById('$modalId')).show();\n        }\n\n        function", $c);
        }
    }
    
    file_put_contents($f, $c);
    echo "Updated JS in $filename\n";
}

updateJS('edit.blade.php');
updateJS('create.blade.php');
