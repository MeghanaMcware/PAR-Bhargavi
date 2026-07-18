<?php
$files = [
    'resources/views/admin/patient/partials/pusculture.blade.php' => 'pusCultureModal',
    'resources/views/admin/patient/partials/urineculture.blade.php' => 'urineCultureModal',
    'resources/views/admin/patient/partials/blood.blade.php' => 'bloodCultureModal'
];

foreach ($files as $f => $modalId) {
    $c = file_get_contents($f);
    
    // The problem is they are missing the modal start HTML completely!
    if (strpos($c, 'id="' . $modalId . '"') === false) {
        // We need to inject the modal start HTML right before <div class="row ...">
        $title = ucfirst(str_replace('Modal', '', $modalId)) . " Entry";
        if ($modalId === 'bloodCultureModal') $title = "Blood Culture Entry";
        
        $modalStart = <<<HTML
            <!-- Modal -->
<div class="modal fade" id="$modalId" tabindex="-1" aria-labelledby="{$modalId}Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="{$modalId}Label">$title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
HTML;
        
        // Find the <div class="row"> or <div class="row g-3 mb-3">
        $c = preg_replace('/<div class="row[^>]*">/', $modalStart . "\n$0", $c, 1);
        file_put_contents($f, $c);
        echo "Injected modal start for $f\n";
    } else {
        echo "$f already has modal start\n";
    }
}
