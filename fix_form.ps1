$file = "c:\wamp64\www\DataManagementSystem\resources\views\frontend\index.blade.php"
$content = Get-Content $file -Raw

# Fix the consent radio buttons - change name and IDs
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)name="sepsis_diagnosis" id="sepsis_yes"', '$1name="consent_share" id="consent_yes"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)name="sepsis_diagnosis" id="sepsis_no"', '$1name="consent_share" id="consent_no"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)for="sepsis_yes"', '$1for="consent_yes"'
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)for="sepsis_no"', '$1for="consent_no"'

# Add required to first radio button of sepsis diagnosis
$content = $content -replace '(?s)(Do you have hospital records saying diagnosis as sepsis.*?)id="sepsis_yes" value="1">', '$1id="sepsis_yes" value="1" required>'

# Add required to first radio button of consent
$content = $content -replace '(?s)(Are you consenting to share then with our research team.*?)id="consent_yes" value="1">', '$1id="consent_yes" value="1" required>'

# Add id, name, required to name input
$content = $content -replace '(?s)(Name.*?<input type="text" class="form-control bg-light border-0" placeholder="Your Name")', '$1 id="userName" name="name" required'

# Add id, name, required to email input
$content = $content -replace '(?s)(Email.*?<input type="email" class="form-control bg-light border-0" placeholder="Your Email")', '$1 id="userEmail" name="email" required'

# Add SweetAlert2 and validation script before closing body
$script = @'

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        } else {
                            event.preventDefault()
                            event.stopPropagation()
                            
                            Swal.fire({
                                title: 'Success!',
                                text: 'Thank you for joining our registry!',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#1e3a8a'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.reset()
                                    form.classList.remove('was-validated')
                                }
                            })
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
'@

$content = $content -replace '</body>', "$script</body>"

Set-Content $file $content -NoNewline
Write-Host "Form updated successfully"
