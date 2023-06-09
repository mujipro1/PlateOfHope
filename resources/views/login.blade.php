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
        
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('regAssistance'))
        <div class="alert alert-success">
            {{ session('regAssistance') }}
        </div>
        @endif

        @if(session('regVolunteer'))
        <div class="alert alert-success">
            {{ session('regVolunteer') }}
        </div>
        @endif

        @if(session('regNGO'))
        <div class="alert alert-success">
            {{ session('regNGO') }}
        </div>
        @endif
        

        <div class='container'>
            <div class="row">
        <section>
            <div class="form-box">
                <form class="loginForm" action="{{route('login-auth')}}" method='post'>
                    @CSRF
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name='email' type="text" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name='password' type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button class="loginbtn"=type='submit' >Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a id="RegLink" href="#">Register</a></p>
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
<script src="{{asset('js/loginHandler.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>