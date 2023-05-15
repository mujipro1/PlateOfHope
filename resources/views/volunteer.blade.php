<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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


        <div class='container dashboard'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h1 class=' pt-4 px-5'>{{$volunteer->first_name}} {{$volunteer->last_name}}</h1>
                            <div class=' pb-4 col-md-12 px-5'>{{$volunteer->address}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class='bottom py-2'></div>
        </section>

        <footer></footer>
    </div>

</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/volunteerCards.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>