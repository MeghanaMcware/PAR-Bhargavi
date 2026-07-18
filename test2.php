<?php
$json = '{"id":1,"hospital_code":"dgdfg","uhid":"dsjndsn","date_of_admission":"2026-07-14","time_of_presentation":null,"age":56,"sex":"Male","chief_complaints":"dfgf","diagnosis":"ffccf","symptom_duration":">15days (3weeks)","comorbidities_cc_index":"1","comorbidity_less_5_years":"nbm","previously_ill_last_3_months":"cvbcv","prev_antibiotic_last_3_months":"cvcv","initial_probable_sepsis_diagnosis":"cvcvvc","direct_or_referred":"vccv","created_at":"2026-07-15T06:40:12.000000Z","updated_at":"2026-07-15T07:15:46.000000Z","serial_labs":[{"id":10,"patient_id":1,"day":"aaa","lab_parameters":null,"wbc_tc":null,"bands_left_shift":null,"nlr":null,"platelets":null,"hb":null,"pct":null,"crp":null,"s_lactate":null,"urea_bun":null,"s_creatinine":null,"ast":null,"alt":null,"s_bilurubin":null,"albubin":null,"ldh":null,"il_6_8_10":null,"abg":null,"ph":null,"pc02":null,"po2":null,"hco3":null,"coagulation_profile":null,"aptt":null,"pt":null,"inr":null,"d_dimer":null,"fibrinogen":null,"electrolytes":null,"na":null,"k":null,"cl":null,"bicarbonates":null,"hba1c":null,"spo2":null,"created_at":"2026-07-15T07:53:47.000000Z","updated_at":"2026-07-15T07:53:47.000000Z"},{"id":11,"patient_id":1,"day":"bbb","lab_parameters":null,"wbc_tc":null,"bands_left_shift":null,"nlr":null,"platelets":null,"hb":null,"pct":null,"crp":null,"s_lactate":null,"urea_bun":null,"s_creatinine":null,"ast":null,"alt":null,"s_bilurubin":null,"albubin":null,"ldh":null,"il_6_8_10":null,"abg":null,"ph":null,"pc02":null,"po2":null,"hco3":null,"coagulation_profile":null,"aptt":null,"pt":null,"inr":null,"d_dimer":null,"fibrinogen":null,"electrolytes":null,"na":null,"k":null,"cl":null,"bicarbonates":null,"hba1c":null,"spo2":null,"created_at":"2026-07-15T07:53:47.000000Z","updated_at":"2026-07-15T07:53:47.000000Z"}]}';

$js = <<<JS
var patientDataJS = $json;
var serialLabRowCount = 0;
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
        
        console.log("Row generated for index " + serialLabRowCount + ": " + rowHtml.substring(0, 50) + "...");
        serialLabRowCount++;
    });
}
JS;

file_put_contents('test.js', $js);
echo "Created test.js\n";
