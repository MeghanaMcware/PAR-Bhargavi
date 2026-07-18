import re

files = [
    'resources/views/admin/patient/partials/basicdetails.blade.php',
    'resources/views/admin/patient/partials/clinicalassessment.blade.php'
]

def replace_input(match):
    full_match = match.group(0)
    name = match.group(1)
    
    if 'value=' in full_match:
        new_str = re.sub(r'value=\\'[^\\']*\\'', f'value=\"{{{{ old(\'{name}\', $patient->{name} ?? \'\') }}}}\"', full_match)
        new_str = re.sub(r'value=\"[^\"]*\"', f'value=\"{{{{ old(\'{name}\', $patient->{name} ?? \'\') }}}}\"', new_str)
        return new_str
    else:
        if 'placeholder' in full_match:
            return full_match.replace('placeholder', f'value=\"{{{{ old(\'{name}\', $patient->{name} ?? \'\') }}}}\" placeholder')
        else:
            return full_match.replace('name=\"' + name + '\"', f'name=\"{name}\" value=\"{{{{ old(\'{name}\', $patient->{name} ?? \'\') }}}}\"')

def replace_textarea(match):
    name = match.group(1)
    full_match = match.group(0)
    content = match.group(2)
    new_tag = re.sub(r'>.*?</textarea>', f'>{{{{ old(\'{name}\', $patient->{name} ?? \'\') }}}}</textarea>', full_match, flags=re.DOTALL)
    return new_tag

for fpath in files:
    with open(fpath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    content = re.sub(r'<input[^>]+name=\"([a-zA-Z0-9_]+)\"[^>]*>', replace_input, content)
    content = re.sub(r'<textarea[^>]+name=\"([a-zA-Z0-9_]+)\"[^>]*>(.*?)</textarea>', replace_textarea, content, flags=re.DOTALL)
    
    with open(fpath, 'w', encoding='utf-8') as f:
        f.write(content)

print('Updated inputs and textareas!')
