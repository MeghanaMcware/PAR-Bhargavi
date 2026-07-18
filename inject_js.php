<?php

$js = <<<JS
        // Load existing Serial Labs from DB
        var patientDataJS = {!! json_encode(\$patient) !!};
        
        function populateSerialLabs() {
            if (patientDataJS && patientDataJS.serial_labs) {
                const fields = ['day', 'lab_parameters', 'wbc_tc', 'bands_left_shift', 'nlr', 'platelets', 'hb', 'pct', 'crp', 's_lactate', 'urea_bun', 's_creatinine', 'ast', 'alt', 's_bilurubin', 'albubin', 'ldh', 'il_6_8_10', 'abg', 'ph', 'pc02', 'po2', 'hco3', 'coagulation_profile', 'aptt', 'pt', 'inr', 'd_dimer', 'fibrinogen', 'electrolytes', 'na', 'k', 'cl', 'bicarbonates', 'hba1c', 'spo2'];
                
                patientDataJS.serial_labs.forEach(lab => {
                    let rowHtml = '<tr data-row-id="' + serialLabRowCount + '">';
                    fields.forEach(fieldName => {
                        const val = lab[fieldName] !== null && lab[fieldName] !== '' ? lab[fieldName] : 'N/A';
                        const hiddenInput = `<input type="hidden" name="serial_labs[\${serialLabRowCount}][\${fieldName}]" value="\${val !== 'N/A' ? val : ''}">`;
                        rowHtml += `<td>\${val}\${hiddenInput}</td>`;
                    });
                    
                    rowHtml += `<td class="d-flex flex-row gap-2">
                        <button type="button" class="btn btn-sm btn-info me-1" onclick="editSerialLabRow(\${serialLabRowCount})">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteSerialLabRow(\${serialLabRowCount})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td></tr>`;
                    
                    document.getElementById('serialLabTableBody').innerHTML += rowHtml;
                    document.getElementById('serialLabTableContainer').style.display = 'block';
                    serialLabRowCount++;
                });
            }
        }
        
        function populateCultures() {
            if (patientDataJS && patientDataJS.cultures) {
                patientDataJS.cultures.forEach(culture => {
                    let type = culture.specimen_type;
                    let prefix = '';
                    let fields = [];
                    let tableBody = '';
                    let container = '';
                    let rowCount = 0;
                    
                    if (type === 'Pus') {
                        fields = ['pusday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'pusCultureTableBody';
                        container = 'pusCultureTableContainer';
                        prefix = 'pusculture_';
                        rowCount = pusCultureRowCount;
                    } else if (type === 'Urine') {
                        fields = ['urineday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'urineCultureTableBody';
                        container = 'urineCultureTableContainer';
                        prefix = 'urineculture_';
                        rowCount = urineCultureRowCount;
                    } else if (type === 'Blood') {
                        fields = ['bloodday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'bloodCultureTableBody';
                        container = 'bloodCultureTableContainer';
                        prefix = 'bloodculture_';
                        rowCount = bloodCultureRowCount;
                    } else {
                        return; // Skip unknown
                    }
                    
                    let rowHtml = '<tr data-row-id="' + rowCount + '">';
                    
                    // The backend stores day in 'day', but the HTML field is 'pusday' or 'urineday'.
                    let dayVal = culture.day !== null && culture.day !== '' ? culture.day : 'N/A';
                    let testingDate = culture.testing_date !== null && culture.testing_date !== '' ? culture.testing_date : 'N/A';
                    let organism = culture.organism_name !== null && culture.organism_name !== '' ? culture.organism_name : 'N/A';
                    
                    rowHtml += `<td>\${dayVal}<input type="hidden" name="cultures[\${rowCount}][day]" value="\${dayVal !== 'N/A' ? dayVal : ''}"></td>`;
                    
                    if (type === 'Blood') {
                        // Blood has specimen_type column
                        rowHtml += `<td>\${type}<input type="hidden" name="cultures[\${rowCount}][specimen_type]" value="\${type}"></td>`;
                    } else {
                        rowHtml += `<input type="hidden" name="cultures[\${rowCount}][specimen_type]" value="\${type}">`;
                    }
                    
                    rowHtml += `<td>\${testingDate}<input type="hidden" name="cultures[\${rowCount}][testing_date]" value="\${testingDate !== 'N/A' ? testingDate : ''}"></td>`;
                    rowHtml += `<td>\${organism}<input type="hidden" name="cultures[\${rowCount}][organism_name]" value="\${organism !== 'N/A' ? organism : ''}"></td>`;
                    
                    // Sensitivities
                    let sensMap = {};
                    if (culture.sensitivities) {
                        culture.sensitivities.forEach(s => {
                            sensMap[s.antibiotic_name.toLowerCase().replace(' ', '_')] = s.result;
                        });
                    }
                    
                    let sensIndex = 0;
                    fields.slice(3).forEach(sensField => {
                        let antibioticName = sensField.replace('_', ' ').replace(/\b\w/g, l => l.toUpperCase());
                        let result = sensMap[sensField] || 'N/A';
                        
                        let hidden1 = `<input type="hidden" name="cultures[\${rowCount}][sensitivities][\${sensIndex}][antibiotic_name]" value="\${antibioticName}">`;
                        let hidden2 = `<input type="hidden" name="cultures[\${rowCount}][sensitivities][\${sensIndex}][result]" value="\${result !== 'N/A' ? result : ''}">`;
                        
                        rowHtml += `<td>\${result}\${hidden1}\${hidden2}</td>`;
                        sensIndex++;
                    });
                    
                    rowHtml += `<td class="d-flex flex-row gap-2">
                        <button type="button" class="btn btn-sm btn-info me-1" onclick="edit\${type}CultureRow(\${rowCount})">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="delete\${type}CultureRow(\${rowCount})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td></tr>`;
                    
                    document.getElementById(tableBody).innerHTML += rowHtml;
                    document.getElementById(container).style.display = 'block';
                    
                    if (type === 'Pus') pusCultureRowCount++;
                    if (type === 'Urine') urineCultureRowCount++;
                    if (type === 'Blood') bloodCultureRowCount++;
                });
            }
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            populateSerialLabs();
            populateCultures();
        });
JS;

$file = 'resources/views/admin/patient/edit.blade.php';
$c = file_get_contents($file);

// Remove the previously injected script for populate cultures selects
$c = preg_replace('/\/\/ Populate Cultures Selects.*?\}\);/s', '', $c);

// Inject the new logic right before </script>\n@endsection
$c = str_replace("</script>\r\n@endsection", $js . "\n</script>\n@endsection", $c);
$c = str_replace("</script>\n@endsection", $js . "\n</script>\n@endsection", $c);

file_put_contents($file, $c);

echo "Injected JS\n";
