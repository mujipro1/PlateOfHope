<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/ngoHome.css')}}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>

<body>


    <div class="c1">
        <img src="{{asset('img/NGOBack1.png')}}" alt="bg" class="bg-img">
        <section id='sec1'>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg"></nav>
                </div>
            </div>

            <div class="container mt-10">
                <div class="row glass ngoRow mt-5 nameofNGO">
                    <div class="col-md-5 p-0 colReg ">
                        <h1> {{$donation->ngo_name}} </h1>
                        <p>{{$donation->email}}</p>
                        <p>{{$donation->contact}}</p>
                        <p>{{$donation->description}}</p>
                    </div>
                    <div class="col-md-2 text-dark">
                    </div>

                    <div class="col-md-5 ">
                        <header class="text-center">
                            <h4 class="display-10 text-light">Enter OTP</h5>
                        </header>

                        <div class="container w-70 p-2">
                            <form class="row g-3 p-3" action="{{(route('new-donation'))}}" method="post">
                                @CSRF
                                <div class='col-md-2'></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" 
                                    name='volunteers' maxlength="4" placeholder="- - - -">
                                </div>
                                <div class='col-md-2'></div>

                                <div class="d-flex mt-4 justify-content-center" id="button">
                                    <button type="submit" class="sendOTPBtn">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <footer></footer>
    </div>

</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/OTP.js')}}"></script>