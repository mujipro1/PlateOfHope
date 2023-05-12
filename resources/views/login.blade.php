<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>
<body>

    <div class="c1">
        <img src="{{asset('img/background.png')}}" alt="bg" class="bg-img">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg"></nav>
            </div>
        </div>
        
    <div class='container'>
            <div class="row">
        <section>
            <div class="form-box">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have a account <a id="RegLink" href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </section>
        </div>
        </div>
        
    <footer></footer>
    </div>
    
</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// document.getElementById('contact').classList.add('active')
const url = window.location.href.split('/');
const view = url[url.length - 1];
document.getElementById(view).classList.add('active');

if (view == 'volunteer') {
    document.getElementById("RegLink").href = "/RegVolunteer";
}
else if (view == 'assistance') {
    document.getElementById("RegLink").href = "/RegAssistance";
}
</script>

</html>