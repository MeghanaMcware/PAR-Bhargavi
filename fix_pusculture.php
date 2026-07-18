<?php
$f = 'resources/views/admin/patient/partials/pusculture.blade.php';
$c = file_get_contents($f);

// 1. Find the old Add button and replace it with the Modal Footer + Add New Record button
$oldBtn = <<<HTML
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary rounded-pill px-4 text-end"
                                                    onclick="addPusCultureData()">
                                                    Add
                                                </button>
                                            </div>
HTML;

$newFooter = <<<HTML
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addPusCultureData(false); var m = bootstrap.Modal.getInstance(document.getElementById('pusCultureModal')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="openPusCultureModal()">
        <i class="bi bi-plus-circle me-1"></i> Add New Record
    </button>
</div>
HTML;

$c = str_replace($oldBtn, $newFooter, $c);

// 2. Remove style="display: none;" from pusCultureTableContainer
$c = str_replace('id="pusCultureTableContainer" style="display: none;"', 'id="pusCultureTableContainer" class="mt-4"', $c);

file_put_contents($f, $c);
echo "Fixed pusculture.blade.php\n";
