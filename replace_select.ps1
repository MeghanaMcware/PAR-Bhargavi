$file = "c:\wamp64\www\DataManagementSystem\resources\views\frontend\index.blade.php"
$content = Get-Content $file -Raw

# Revert the consent question back to select dropdown
$pattern1 = '(?s)Are you consenting to share then with our research team.*?<div class="d-flex gap-4 mt-2">.*?</div>'
$replacement1 = 'Are you consenting to share then with our research team <span class="text-danger">*</span></b></label>
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>'

$content = [regex]::Replace($content, $pattern1, $replacement1)

# Revert the doctor selection back to select dropdown
$pattern2 = '(?s)<div class="col-12 col-sm-6 d-flex flex-column align-items-start">\s+<div class="d-flex gap-4 mt-2">.*?</div>\s+</div>\s+<div class="col-12 col-sm-6 d-flex flex-column align-items-start">'
$replacement2 = '<div class="col-12 col-sm-6 d-flex flex-column align-items-start">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-column align-items-start">'

$content = [regex]::Replace($content, $pattern2, $replacement2)

# Fix the consent radio buttons to have unique name and IDs
$content = $content -replace 'name="sepsis_diagnosis" id="sepsis_yes"(.*?Are you consenting to share then with our research team.*?)name="sepsis_diagnosis" id="sepsis_yes"', 'name="consent_share" id="consent_yes"$1name="consent_share" id="consent_yes"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)name="sepsis_diagnosis" id="sepsis_no"', '$1name="consent_share" id="consent_no"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)for="sepsis_yes"', '$1for="consent_yes"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)for="sepsis_no"', '$1for="consent_no"'

Set-Content $file $content -NoNewline
