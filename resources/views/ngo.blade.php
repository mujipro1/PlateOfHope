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

    @if(session('donation'))
        <div class="alert alert-success">
            {{ session('donation') }}
        </div>
        @endif

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
                    <div class="col-md-8 p-0 colReg ">
                       <h1> {{$ngo->name}} </h1>
                       <p>{{$ngo->email}}</p>
                       <p>{{$ngo->contact}}</p>
                       <p>{{$ngo->description}}</p>
                       <p>
                        <button class="newDonationBtn" >New Donation</button>

                       </p>
                    </div>
                </div>
            </div>
          </section>


          <section style="min-height:60vh; margin-bottom:10vh;">
          <div class='container newDonation outerCont'>
                <div class='row'>
                    
                    <div class="col-md-12 formDiv text-dark">
                        <header class="text-center">
                            <h3 class="display-10 text-light pt-4 mt-10 ">Arrange a new Donation</h3>
                        </header>

                        <div class="container my-2  w-70 p-2">
                            <form class="row g-3 p-3" action="{{(route('new-donation'))}}" method="post">
                                @CSRF
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="validationDefault01" required
                                    placeholder="Address" name='address'>
                                </div>
                                <div class="col-md-6 cityDiv">
                                    <!-- make a drop down with all cities list -->
                                    <select class="form-select city-dropdown" name='city'>
                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="validationDefault02" required
                                        placeholder="No. of Volunteers Required" name='volunteers'>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" required
                                            placeholder="Date" name='date'>
                                    </div>
                                </div>
                                
                                    <div class="d-flex mt-4 justify-content-center" id="button">
                                        <button type="submit" class="newDonationBtn">Apply</button>
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
<script src="{{asset('js/citySelect.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var errorMessage = document.querySelector('.alert');
    if(errorMessage != null){
        errorMessage.classList.add('show');
        
        var duration = 3000; 
        setTimeout(function() {
            errorMessage.classList.remove('show');
            
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 500); 
        }, duration);
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>



<script>
const btn = document.querySelector(".newDonationBtn");
btn.addEventListener("click", function() {
    document.querySelector(".newDonation").scrollIntoView(true);
});

logout = `
        <li class="nav-item">
        <a id='logout' class="nav-link" href="/logoutNGO">Log Out</a>
        </li>
        `
document.querySelector('.navbar-nav').innerHTML += logout

</script>