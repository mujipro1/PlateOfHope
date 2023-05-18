<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favIcon2.png')}}">
    <title>Plate of Hope</title>
</head>

<body>

    <div class="c1">
        <div class="container pb-5">
            <div class="row">
                <nav class="navbar bg-dark navbar-expand-lg"></nav>
            </div>
        </div>



        <div class=" container">
            <section>
                <div class="row">
                    <div class="col-md-6 my-4 picCont2" style="background-image: url('{{asset('img/contact.png')}}');">
                        <div class="division">
                            <p class="bi">Address</p>
                            <p>
                                9th Floor, Ufone Tower, Jinnah Ave, F 7/1 Blue Area, Islamabad
                            </p>
                        </div>
                        <div class="division d2">
                            <p class="bi">Let's Talk</p>
                            <p>+92 332 001122</ps=>
                        </div>
                        <div class="division d3">
                            <p class="bi">General Support</p>
                            <p id="gmail">plateofhope@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-md-6 my-4 contactBg w-70 p-2">
                        <header class="text-center">
                            <h3 class="display-12 pt-3 mt-10 ">Register Your NGO</h3>
                        </header>

                        <div class="container my-2  w-70 p-2">
                            <form class="row g-3 p-3" action="{{route('ngoReg-auth')}}" method='post'>
                                @CSRF
                                <div class="col-md-12 ">
                                    <input name='name' type="text" class="form-control" id="validationDefault01"
                                        required placeholder="Name">
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" class="form-control" id="validationDefault01" required
                                        placeholder="Contact" name='contact'>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Password" name='password'>
                                </div>
                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" id="validationDefault01" required
                                        placeholder="Email" name='email'>
                                </div>
                                <div class="col-md-12 ">
                                    <input name='address' type="tel" class="form-control" id="validationDefault01"
                                        required placeholder="Address">
                                </div>
                                <div class="col-md-12">

                                    <div class="col-md-12 cityDiv">
                                        <!-- make a drop down with all cities list -->
                                        <select class="form-select city-dropdown" name='city'>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 cityDiv">

                                    <textarea name="description" id="feedback" placeholder="Description" expand="false"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 cityDiv">
                                    <label style="padding:20px ;">Choose an Image</label>
                                    <input id="chooseFile" type="file" name="png_files" accept="image/png">

                                </div>


                                <div class="d-flex mt-3 justify-content-center">
                                    <button class="btn submitBtn" type='submit'>Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <footer></footer>
    </div>

</body>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/citySelect.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>