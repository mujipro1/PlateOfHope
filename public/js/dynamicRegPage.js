const url = window.location.href.split('/');
const view = url[url.length - 1];

if (view == 'RegAssistance') {
    document.getElementById("assistance").classList.add('active');
    cityDiv = document.querySelector(".cityDiv")
    cityDiv.classList.remove('col-md-12');
    cityDiv.classList.add('col-md-6');
    code = `
        <div class="col-md-6">
        <input type="text" class="form-control" id="inputSalary" name='salary' placeholder="Salary">
        </div> `;

    code += `<input type="hidden" name="registration_type" id='registration_type' value='beneficiary'>`;
    cityDiv.insertAdjacentHTML('afterend', code);
}

if (view == 'RegVolunteer') {
    document.getElementById("volunteer").classList.add('active');
    const availabilityContainer = document.getElementById('availability');
    const daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    code = ''
    function createDiv(idx, day){
        return `<div class="col-md-4">
            <input class="in" type="checkbox" name="days" value="${idx}"><small class="in">${day}</small>
        </div>`;
    }
    code += `<label class="label row control-label">Availability</label>`;
    for (let i = 0; i < daysOfWeek.length; i++) {
        if (i % 3 == 0) {
            code += `<div class="row rowbg ">`;
        }
        code += createDiv(i+1, daysOfWeek[i]);
        if (i % 3 == 2) {
            code += `</div>`;
        }
    }
    code += `<input type="hidden" name="registration_type" id='registration_type' value='volunteer'>`;

    availabilityContainer.innerHTML = code;
}


const cityList = [ "Islamabad", "Ahmed Nager", "Ahmadpur East", "Ali Khan", "Alipur", "Arifwala", 
            "Attock", "Bhera", "Bhalwal", "Bahawalnagar", "Bahawalpur", "Bhakkar", "Burewala", 
            "Chillianwala", "Chakwal", "Chichawatni", "Chiniot", "Chishtian", "Daska", "Darya Khan",
            "Dera Ghazi", "Dhaular", "Dina", "Dinga", "Dipalpur", "Faisalabad", "Fateh Jhang",
            "Ghakhar Mandi", "Gojra", "Gujranwala", "Gujrat", "Gujar Khan", "Hafizabad", "Haroonabad",
            "Hasilpur", "Haveli", "Lakha", "Jalalpur", "Jattan", "Jampur", "Jaranwala", "Jhang", "Jhelum",
            "Kalabagh", "Karor Lal", "Kasur", "Kamalia", "Kamoke", "Khanewal", "Khanpur", "Kharian",
            "Khushab", "Kot Adu", "Jauharabad", "Lahore", "Lalamusa", "Layyah", "Liaquat Pur", "Lodhran",
            "Malakwal", "Mamoori", "Mailsi", "Mandi Bahauddin", "mian Channu", "Mianwali", "Multan",
            "Murree", "Muridke", "Mianwali Bangla", "Muzaffargarh", "Narowal", "Okara", "Renala Khurd",
            "Pakpattan", "Pattoki", "Pir Mahal", "Qaimpur", "Qila Didar", "Rabwah", "Raiwind", "Rajanpur",
            "Rahim Yar", "Rawalpindi", "Sadiqabad", "Safdarabad", "Sahiwal", "Sangla Hill", "Sarai Alamgir",
            "Sargodha", "Shakargarh", "Sheikhupura", "Sialkot", "Sohawa", "Soianwala", "Siranwali", "Talagang",
            "Taxila", "Toba Tek", "Vehari", "Wah Cantonment", "Wazirabad", "Badin", "Bhirkan", "Rajo Khanani", 
            "Chak", "Dadu", "Digri", "Diplo", "Dokri", "Ghotki", "Haala", "Hyderabad", "Islamkot", "Jacobabad", 
            "Jamshoro", "Jungshahi", "Kandhkot", "Kandiaro", "Karachi", "Kashmore", "Keti Bandar", "Khairpur", 
            "Kotri", "Larkana", "Matiari", "Mehar", "Mirpur Khas", "Mithani", "Mithi", "Mehrabpur", "Moro", 
            "Nagarparkar", "Naudero", "Naushahro Feroze", "Naushara", "Nawabshah", "Nazimabad", "Qambar", "Qasimabad", 
            "Ranipur", "Ratodero", "Rohri", "Sakrand", "Sanghar", "Shahbandar", "Shahdadkot", "Shahdadpur", "Shahpur Chakar", 
            "Shikarpaur", "Sukkur", "Tangwani", "Tando Adam", "Tando Allahyar", "Tando Muhammad", "Thatta", "Umerkot", "Warah", 
            "Abbottabad", "Adezai", "Alpuri", "Akora Khattak", "Ayubia", "Banda Daud", "Bannu", "Batkhela", "Battagram", "Birote",
            "Chakdara", "Charsadda", "Chitral", "Daggar", "Dargai", "Darya Khan", "dera Ismail", "Doaba", "Dir", "Drosh", 
            "Hangu", "Haripur", "Karak", "Kohat", "Kulachi", "Lakki Marwat", "Latamber", "Madyan", "Mansehra", "Mardan", 
            "Mastuj", "Mingora", "Nowshera", "Paharpur", "Pabbi", "Peshawar", "Saidu Sharif", "Shorkot", "Shewa Adda", 
            "Swabi", "Swat", "Tangi", "Tank", "Thall", "Timergara", "Tordher", "Awaran", "Barkhan", "Chagai", "Dera Bugti",
            "Gwadar", "Harnai", "Jafarabad", "Jhal Magsi", "Kacchi", "Kalat", "Kech", "Kharan", "Khuzdar", "Killa Abdullah",
            "Killa Saifullah", "Kohlu", "Lasbela", "Lehri", "Loralai", "Mastung", "Musakhel", "Nasirabad", "Nushki", "Panjgur", 
            "Pishin valley", "Quetta", "Sherani", "Sibi", "Sohbatpur", "Washuk", "Zhob", "Ziarat" ]

cityList.sort();
cityDrop = document.querySelector('.city-dropdown');
cityDrop.innerHTML = '';
cityDrop.innerHTML += `<option value="" disabled selected style="color: gray;">City</option>`


for (let i = 0; i < cityList.length; i++) {
    cityDrop.innerHTML += `<option value="${cityList[i]}">${cityList[i]}</option>`;
}
