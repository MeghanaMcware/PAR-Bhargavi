<?php

// Fix Pus Culture
$f = 'resources/views/admin/patient/partials/pusculture.blade.php';
$c = file_get_contents($f);
$badBtn = <<<HTML
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary rounded-pill px-4 text-end"
                                                    onclick="addPusCultureData()">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
HTML;
$modalEnd = <<<HTML
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
<div class="d-none">
HTML;
$c = str_replace($badBtn, $modalEnd, $c);
file_put_contents($f, $c);
echo "Fixed pus!\n";

// Fix Blood Culture
$f = 'resources/views/admin/patient/partials/blood.blade.php';
$c = file_get_contents($f);
$badBtn = <<<HTML
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <button type="button" class="btn btn-primary"
                                                onclick="addBloodCultureData()">Add</button>
                                        </div>
HTML;
// Note: for blood, the row div might have already been closed.
$modalEnd = <<<HTML
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addBloodCultureData(false); var m = bootstrap.Modal.getInstance(document.getElementById('bloodCultureModal')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="openBloodCultureModal()">
        <i class="bi bi-plus-circle me-1"></i> Add New Record
    </button>
</div>
<div class="d-none">
HTML;
$c = str_replace($badBtn, $modalEnd, $c);
file_put_contents($f, $c);
echo "Fixed blood!\n";
