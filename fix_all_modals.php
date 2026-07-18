<?php
$files = [
    ['resources/views/admin/patient/partials/pusculture.blade.php', 'addPusCultureData', 'pusCultureModal', 'Pus Culture Entry'],
    ['resources/views/admin/patient/partials/urineculture.blade.php', 'addUrineCultureData', 'urineCultureModal', 'Urine Culture Entry'],
    ['resources/views/admin/patient/partials/blood.blade.php', 'addBloodCultureData', 'bloodCultureModal', 'Blood Culture Entry']
];

foreach ($files as $f) {
    $path = $f[0];
    $addFunc = $f[1];
    $modalId = $f[2];
    $title = $f[3];
    
    $c = file_get_contents($path);
    if (strpos($c, 'modal-footer') !== false) {
        echo "$path already has footer.\n";
        continue;
    }
    
    // Find the button block
    $btnStr = <<<HTML
                                            <div class="d-flex flex-column align-items-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="$addFunc()">Add</button>
                                            </div>
                                        </div>
HTML;
    
    if (strpos($c, $btnStr) === false) {
        echo "Could not find button block for $path\n";
        continue;
    }
    
    $modalEnd = <<<HTML
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="$addFunc(false); var m = bootstrap.Modal.getInstance(document.getElementById('$modalId')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="open$modalId()">
        <i class="bi bi-plus-circle me-1"></i> Add New Record
    </button>
</div>
<div class="d-none">
HTML;
    
    // The open function needs the first letter capitalized
    $openFunc = "open" . ucfirst($modalId) . "()";
    $modalEnd = str_replace("open$modalId()", $openFunc, $modalEnd);

    $c = str_replace($btnStr, $modalEnd, $c);
    file_put_contents($path, $c);
    echo "Fixed $path modal closing!\n";
}
