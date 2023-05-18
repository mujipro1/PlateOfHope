let otp_val = Math.floor(Math.random() * 10000);
let otpverify = document.querySelectorAll(".otp-verify");
let otp_btn = document.querySelector(".sendOTPBtn");
let email = document.querySelector(".email");
otp_inp = document.querySelector(".otp-input");
document.addEventListener('DOMContentLoaded', sendOTP());

function sendOTP() {
    let emailbody = `
    <h1>Thank you for Applying for volunteer work</h1>
    <h2>Your OTP is:</h2>${otp_val}
    `;
    
    Email.send({
        SecureToken: "7e2d017e-9b1f-46be-8d6f-4c5921930d40",
        To: email.value,
        From: "jatindark906@gmail.com",
        Subject: "PlateOfHope",
        Body: emailbody
    }).then(function(message) {
        console.log("email sent"),

        
            console.log(message)
            if (message === "OK") {
                alert("OTP sent to your email: " + email.value);

                otpverify.forEach(element => {
                    element.classList.remove("d-none");
                });
   
            document.querySelector("form").innerHTML+=`
            <input hidden name="OPTori"  value=${otp_val}>
            <input hidden name="OTPval"  value=${otp_inp.value}>
            `
            }
            else {
                console.log("Not OK");
            }
        }
    ).catch(error => {
        console.log("Error occurred:", error);
    });
}

