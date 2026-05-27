$file = "c:\wamp64\www\DataManagementSystem\resources\views\frontend\index.blade.php"
$content = Get-Content $file -Raw

# Add invalid-feedback to consent radio buttons
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?</div>\s+)</div>\s+</div>', '$1<div class="invalid-feedback">Please select an option.</div>' + "`r`n" + '                                    </div>' + "`r`n" + '                                </div>'

# Add invalid-feedback to name input
$content = $content -replace '(?s)(Name.*?id="userName" name="name" required\s+style="height: 55px;">)', '$1<div class="invalid-feedback">Please enter your name.</div>'

# Add invalid-feedback to email input
$content = $content -replace '(?s)(Email.*?id="userEmail" name="email" required\s+style="height: 55px;">)', '$1<div class="invalid-feedback">Please enter a valid email.</div>'

Set-Content $file $content -NoNewline
Write-Host "Invalid feedback added successfully"
