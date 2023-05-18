const url = window.location.href.split('/');
view = url[url.length - 1];
view = view.replace('#', '');

document.addEventListener('DOMContentLoaded', function() {
    var errorMessage = document.querySelector('.alert');
    if(errorMessage != null){
        errorMessage.classList.add('show');
        
        var duration = 3000; 
        setTimeout(function() {
            errorMessage.classList.remove('show');
            
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 500); 
        }, duration);
    }
});

if (view!='ngoLogin'){
    document.getElementById(view).classList.add('active');
}

form = document.querySelector('.loginForm')

if (view == 'volunteer') {
    document.getElementById("RegLink").href = "/RegVolunteer";
    form.innerHTML += `<input type="hidden" name="role" id='role' value='volunteer'>`;
}
else if (view == 'assistance') {
    document.getElementById("RegLink").href = "/RegAssistance";
    form.innerHTML += `<input type="hidden" name="role" id='role' value='beneficiary'>`;
}
else if (view == 'ngoLogin') {
    document.getElementById("RegLink").href = "/ngoRegistration";
    form.innerHTML += `<input type="hidden" name="role" id='role' value='ngo'>`;
}
