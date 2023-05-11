const url = window.location.href.split('/');
const view = url[url.length - 1];

if (view == 'RegAssistance') {
    document.getElementById("assistance").classList.add('active');
    cityDiv = document.querySelector(".cityDiv")
    cityDiv.classList.remove('col-md-12');
    cityDiv.classList.add('col-md-6');
    code = `
        <div class="col-md-6">
        <input type="text" class="form-control" id="inputSalary" placeholder="Salary">
        </div> `;
    cityDiv.insertAdjacentHTML('afterend', code);
}
if (view == 'RegVolunteer') {
    document.getElementById("volunteer").classList.add('active');
    const availabilityContainer = document.getElementById('availability');
    const daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    code = ''
    function createDiv(day){
        return `<div class="col-md-4">
            <input class="in" type="checkbox" name="a" value="${day}"><small class="in">${day}</small>
        </div>`;
    }
    code += `<label class="label row control-label">Availability</label>`;
    for (let i = 0; i < daysOfWeek.length; i++) {
        if (i % 3 == 0) {
            code += `<div class="row rowbg ">`;
        }
        code += createDiv(daysOfWeek[i]);
        if (i % 3 == 2) {
            code += `</div>`;
            console.log('here', i)
        }
    }
    availabilityContainer.innerHTML = code;
}