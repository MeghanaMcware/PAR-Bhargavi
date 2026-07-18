<?php
$f = 'resources/views/admin/patient/partials/seriallab.blade.php';
$c = file_get_contents($f);

// Find the bad button and replace it with the modal footer.
$badButton = <<<HTML
                                            <div class="d-flex flex-column align-items-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addSerialLabData()">Add</button>
                                            </div>
                                        </div>
HTML;

$modalEnd = <<<HTML
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addSerialLabData(false); var m = bootstrap.Modal.getInstance(document.getElementById('serialLabModal')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="openSerialLabModal()">
        <i class="bi bi-plus-circle me-1"></i> Add New Record
    </button>
</div>
<div class="d-none">
HTML;

if (strpos($c, 'class="modal fade"') !== false && strpos($c, 'modal-footer') === false) {
    $c = str_replace($badButton, $modalEnd, $c);
    file_put_contents($f, $c);
    echo "Fixed serial lab modal closing!\n";
} else {
    echo "Could not find bad button or already has modal-footer.\n";
}
