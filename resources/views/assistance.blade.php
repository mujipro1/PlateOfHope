<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/assistance.css')}}" rel="stylesheet">  
    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>
<body>

    <div class="c1">
        <div class="container">
            <div class="row">
                <nav class="navbar bg-dark navbar-expand-lg"></nav>
            </div>
        </div>

        <div class='bottom py-2'>
            <div class='container dashboard'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h1 class=' pt-4 px-5'>{{$beneficiary->first_name}} {{$beneficiary->last_name}}</h1>
                                <div class='col-md-12 vol'>Beneficiary</div>
                                <div class=' pb-4 col-md-12 vol '>{{$beneficiary->email}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="container cityFilter my-5">
                    <div class="row ">
                        <div class='col-md-6 p-5'>
                            <h4>Find the nearest NGO</h4><br>
                            <p> Find Food Banks in </p>

                            <div class='row'>
                                <form action='/cityNGOsA' method="post">
                                    @CSRF
                                    <select id='citySelect' class="form-select" name='city'>
                                    </select>
                                    <button class='Button SBtn' type='submit'>Search</button>
                            </div>
                            </form>

                        </div>

                        <div class='col-md-6'>
                            <div id="map"></div>
                            <p class='p-2'>Navigate the marker through the map to locate your city</p>
                        </div>
                    </div>
                </div>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyhBzsCBlHZZz-wZlkQPE6Moo5x1BP6GM&callback=initMap">
                </script>

                <h6 class='dynamicLabel p-4'>Showing All Donations in <span id='selectedCity'>{{$selectedCity}}</span> :
                    Found {{count($donations)}} result(s)</h6>



                @foreach( $donations as $donation )
                <div class='container my-3'>
                    <div class="card">
                        <div class="row card1">
                            <div class="col-md-5">
                                <img src="{{asset('img/NGOs/'.$donation->image)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body px-3">
                                    <h3 class="card-title pt-3">{{ $donation->ngo_name}}</h3>
                                    <p class="card-text ">{{ $donation->address }}
                                    <p class="">{{ $donation->no_of_volunteers}}</p>
                                    <p class="">{{ $donation->date}}</p>
                                    </p>
                                    <h5>+{{ $donation->contact }}</h5>
                                    <p><strong></strong></p>
                                    <button type="button" class="button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        </section>


        <footer></footer>
    </div>
    
</body>
<script src="{{asset('js/citySelectV.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/map.js')}}"></script>
<script>document.getElementById('assistance').classList.add('active')</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>

    logout = `
        <li class="nav-item">
        <a id='logout' class="nav-link" href="/logout">Log Out</a>
        </li>
        `
    document.querySelector('.navbar-nav').innerHTML+=logout
    
</script>
</html>