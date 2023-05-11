<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>

<body>
    <div class="c1">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg"></nav>
            </div>
        </div>

        <section>
        <div class='container outerCont'>
            <div class='row'>
                <div class="col-md-6 picCont" style="background-image: url('{{asset('img/contact.png')}}');">
                    <h2>Register With Us</h2><br>
                    <p>"Be the change that you wish to see in the world." - Mahatma Gandhi</p>
                </div>
                <div class="col-md-6 formDiv text-dark">
                    <header class="text-center">
                        <h3 class="display-10 pt-3 mt-10 ">Registration form</h3>
                    </header>

                    <div class="container my-2  w-70 p-2">
                        <form class="row g-3 p-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="validationDefault01" required
                                    placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="validationDefault02" required
                                    placeholder="Last name">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" required
                                        placeholder="CNIC">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputZip" placeholder="Job">
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="inputCity" placeholder="Company">
                            </div>

                            <div class="col-md-12 cityDiv">
                                <input type="text" class="form-control" id="inputCity" placeholder="City">
                            </div>

                            <div class="salary"><div>

                            <div id='availability' class='col-md-12'></div>

                            <div class="d-flex mt-3 justify-content-center" id="button">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

        <footer></footer>
    </div>

</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/dynamicRegPage.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>