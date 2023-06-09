<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>

<body>

    <div class="c1">
        <section id='sec1'>
            <img src="{{asset('img/background.png')}}" alt="bg" class="bg-img">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg"></nav>
                </div>
            </div>
            <div class="container welcomeText  m-t-10">
                <div class="row">
                    Give, Share, Impact
                </div>
            </div>
        </section>

        <section id='sec2' class="cards">
            <div class="container pt-10">
                <div class="row cardrow">
                    <div class="col-md-4 cardOuter">
                        <div class="card" onclick="window.location.href ='/assistance'" style="width: 18rem;">
                            <img src="{{asset('img/assistance.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Food Assistance</h5>
                                <p class="card-text">Apply for food assistance and get details of all nearby food donors
                                    and their timings</p>
                                <a href="/assistance" class="btn btnCard">Apply Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 cardOuter">
                        <div class="card" onclick="window.location.href ='/volunteer'" style="width: 18rem;">
                            <img src="{{asset('img/volunteer.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Volunteer</h5>
                                <p class="card-text">Apply to Volunteer for food donations around your area for a better
                                    cause</p>
                                <a href="/volunteer" class="btn btnCard">Apply Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 cardOuter">
                        <div class="card" id='aboutUsCard' style="width: 18rem;">
                            <img src="{{asset('img/aboutUs.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
                                <p class="card-text">Connecting needy families with food banks, we've come a long way,
                                    learn more.</p>
                                <a class="btn btnCard">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section style="background-image:url({{asset('img/NGOback.png')}})" class="ngoC">
            <div class="container">
                <div class="row ngoRow registerNGO">
                    <div class="col-md-12 p-0 text-center colReg ">
                       <h1> Register Your NGO with Us </h1>
                       <p>Empowering communities, transforming lives. Join us in making a difference together.</p>
                       <p>
                        <button class="loginBtnNGO" onclick="window.location.href ='/ngoLogin'" >Login</button>
                        <button class="regBtnNGO" onclick="window.location.href ='/ngoRegistration'" >Register</button>

                       </p>
                    </div>
                </div>
            </div>
        </section>

        <section id='aboutUs'>
            <div class="container infoContainer">
                <div class="row infoRow">
                    <div class="col-md-6 p-0">
                        <img src="{{asset('img/map.png')}}" id='infoPic' alt="bg">
                        <div class="row">
                            <div id="infoDetails">
                                <div class="container">
                                    <div class="row sepRow mt-4">
                                        <div class="col-md-4 sepDetails">Meals donated<br>
                                            <p id='Dmeals'>1200+</p>
                                        </div>
                                        <div class="col-md-4 sepDetails">Families Fed<br>
                                            <p id='Dfam'>122+</p>
                                        </div>
                                        <div class="col-md-4 sepDetails">Volunteers<br>
                                            <p id='Dvol'>2200+</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div id="infoPara">
                            <h3>To date, the impact we have made remains unchanged.</h3><br>
                            <p>So far, we have made significant strides in our mission, connecting countless
                                individuals and families to vital food assistance, mobilizing volunteers, and
                                facilitating the distribution of donations to make a tangible impact on hunger
                                in our communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='reviewCont'>
            <div class="container py-3">
                <div class='row my-4'>
                    <h4>User Reviews</h4>
                </div>
                @foreach($feedbacks as $feedback)
                <div class="card review px-4 py-4 my-3">
                    <div class="name">
                        <div class="circle">
                            <span class="letter">{{$feedback['first_name'][0]}}</span>
                        </div>
                        <h5 class='my-2 mx-3 FL'>{{$feedback['first_name']}} {{$feedback['last_name']}}</h5>
                    </div>
                    <p class='email'>{{$feedback['email']}}</p>
                    <p class='comments'>{{$feedback['comments']}}</p>
                </div>
                @endforeach
            </div>
        </section>

        <footer></footer>
    </div>

</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/frontend.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('home').classList.add('active')
</script>

</html>