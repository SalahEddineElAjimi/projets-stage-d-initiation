<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">

    <title>Application web</title>
    <style>
        .bg-img{
            background-image:  url("https://images.pexels.com/photos/5926387/pexels-photo-5926387.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
        }
    </style>
  </head>
  <body>
    <section class="bg-img">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                <a class="navbar-brand text-info " href="#">Application_Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-info " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>



                    </ul>

                </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto mt-3 text-center">
                    <h1 class="text-white display-1 fw-bold mt-5">Création et Archivage des documents</h1>
                    <hr class="bg-white w-50 mx-auto">
                    <p class="text-white fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam consequatur illo possimus expedita maiores cum? Eum fuga atque quis excepturi provident reiciendis, nesciunt cumque illo minima voluptatem exercitationem nihil temporibus, quidem non quod illum eos rem est odio inventore numquam repellendus facilis. Inventore maxime aliquam expedita similique error recusandae architecto.</p>
                    <div class="card-body">
                        @guest
                            <a href="{{url('/login')}}" class="btn btn-outline-info">Login</a>
                        @endguest
                        @auth
                            <a href="{{url('admin/home')}}" class="btn btn-outline-primary">Home</a>
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    -->
  </body>
</html>
