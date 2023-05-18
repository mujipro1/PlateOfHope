document.addEventListener('DOMContentLoaded', sendOTP());
function sendOTP() {
    console.log("attempt");
    const otpverify = document.getElementsByClassName("otpverify")[0];
    let otp_val = Math.floor(Math.random() * 10000);
    console.log("sdfsg");
    let emailbody = `
    <h1>Thank you for Applying for volunteer work</h1>
    <h2>Your OTP is:</h2>${otp_val}
    `;
    console.log("attempt2");
    
    Email.send({
        SecureToken: "7e2d017e-9b1f-46be-8d6f-4c5921930d40",
        To: email.value,
        From: "jatindark906@gmail.com",
        Subject: "PlateOfHope",
        Body: emailbody
    }).then(
        console.log("email sent"),
        message => {
            if (message === "OK") {
                console.log("sent")
                alert("OTP sent to your email: " + email.value);
                console.log("fgfg")
                // Making OTP input visible
                otpverify.style.display = "block";
                const otp_inp = document.getElementById("otp_inp");
                const otp_btn = document.querySelector(".sendOTPBtn");

                otp_btn.addEventListener("click", () => {
                    // Check if OTP is valid or not
                    if (otp_inp.value == otp_val) {
                        alert("Your email address is verified.");
                    } else {
                        alert("Invalid OTP.");
                    }
                });
            } else {
                console.log("not okay");
            }
        }
    ).catch(error => {
        console.log("Error occurred:", error);
    });
}
