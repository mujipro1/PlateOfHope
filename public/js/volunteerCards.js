document.getElementById('volunteer').classList.add('active')
bottomPage = document.querySelector('.bottom')
imgSrc = "{{asset('img/aboutUs.png')}}"

code = `
    <div class='container CardC my-5'>
    <div class="card">
        <div class="row g-0 card1">
            <div class="col-md-5">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title">JDC FOUNDATION PAKISTAN</h3>
                    <p class="card-text">JDC Foundation Pakistan is a welfare and non-governmental
                        organization (NGO) mainly operating in Pakistan. JDC has started distribution of
                        packed daily cooking stuff (flour, vegetable oils, sugar, etc.) to help the
                        needy
                        people.</p>
                    <h5>TIME:</h5>
                    <p><strong>3:00 PM TO 5:00 PM Every day</strong></p>
                    <button type="button" class="button">Apply</button>
                </div>
            </div>
        </div>
    </div>
    </div>
`

for (i=0; i<3; i++){
    bottomPage.innerHTML += code;
}