<?php
$f = 'resources/views/admin/patient/partials/seriallab.blade.php';
$c = file_get_contents($f);

// Wrap row in modal
$modalStart = <<<HTML
<!-- Modal -->
<div class="modal fade" id="serialLabModal" tabindex="-1" aria-labelledby="serialLabModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serialLabModalLabel">Serial Lab Entry</h5>
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
        <button type="button" class="btn btn-primary" onclick="addSerialLabData(false); var m = bootstrap.Modal.getInstance(document.getElementById('serialLabModal')); if(m) m.hide();">Save Record</button>
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <button type="button" class="btn btn-primary" onclick="openSerialLabModal()">
        <i class="bi bi-plus-circle me-1"></i> Add New Serial Lab
    </button>
</div>
<div class="d-none">
HTML;

$c = str_replace('<div class="d-flex justify-content-end mb-3">', $modalEnd, $c);

// Also remove display:none from the table container
$c = str_replace('<div id="serialLabTableContainer" class="mt-4" style="display: none;">', '<div id="serialLabTableContainer" class="mt-4">', $c);

file_put_contents($f, $c);
