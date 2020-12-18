<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Presentation</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"
                            href="#carouselExampleIndicators">Carousel</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About me</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    @if (Route::has('login'))
                    @auth
                    @if (Auth::user()->role_id == 2)
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="btn btn-primary py-2 px-3 mr-3 mt-4 ml-3"
                            style="border: 2px solid black;">Admin</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-3 mt-4 mr-3 ml-3"
                            style="border: 2px solid black;">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-3 mt-4"
                            style="border: 2px solid black;">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif

                    @auth
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="btn btn-danger py-2 px-3 mr-3 mt-4 ml-2" style="border: 2px solid black;"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                @foreach ($pres as $item)
                <h1 class="mx-auto my-0 text-uppercase">{{$item->titre}}</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">{{$item->sous_titre}}</h2>
                @endforeach
                <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
            </div>
        </div>
    </header>
    <!-- Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            @foreach ($carousels as $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$item->id}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('mesImages/uz6WiId9IWYGYGqSTB5uypg8OEk85cY3d5SK1hEN.jpg')}}"
                    alt="First slide" height="850">
            </div>
            @foreach ($carousels as $item)
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('mesImages/'.$item->src)}}" alt="Third slide" height="850">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="../img/bg-masthead.jpg"
                        alt="" />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Shoreline</h4>
                        <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can
                            use it for any project - even commercial projects! Download it, customize it, and
                            publish your website!</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6"><img class="img-fluid" src="../img/demo-image-01.jpg" alt="" /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Misty</h4>
                                <p class="mb-0 text-white-50">An example of where you can put an image of a project,
                                    or anything else, along with a description.</p>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6"><img class="img-fluid" src="../img/demo-image-02.jpg" alt="" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Mountains</h4>
                                <p class="mb-0 text-white-50">Another example of a project with its respective
                                    description. These sections work well responsively as well, try this theme on a
                                    small screen!</p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mes Projects -->
            {{-- <h1 class="text-center mt-5">Mes Projects</h1> --}}
            <hr class="d-lg-block mb-0 mr-0 w-50 m-auto bg-primary" />
            @foreach ($projects as $item)
            <div class="row w-75 m-auto justify-content-center no-gutters pt-5">
                <div class="col-lg-6"><img class="img-fluid" src="{{asset('mesImages/'.$item->src)}}" alt=""
                        style="width: 558px; height: 300px;" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Nom : {{$item->nom}}</h4>
                                <p class="mb-0 text-white-50 mb-3">Description : {{$item->description}}</p>
                                <p class="mb-0 text-white btn btn-info p-2 mb-3">{{$item->skills->nom}}</p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{$item->skills->pourcentage}}%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">{{$item->skills->pourcentage}}%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- About-->
    <section class="about-section text-center" style="margin-bottom: 150px;" id="about">
        <div class="container">
            @foreach ($abouts as $item)
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-5">{{$item->titre}}</h2>
                </div>
            </div>
            <img class="img-fluid" src="{{asset($item->src)}}" alt="" />
            @endforeach
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <form action="/newsletter" method="post" class="form-inline d-flex">
                        @csrf
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email"
                            placeholder="Enter email address..." name="emailNewsletter" />
                        <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section pt-4 bg-black">
        <div class="container">
            <div class="row mb-5 pt-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe class="mt-5 mb-5"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10074.77330432947!2d4.341225!3d50.855363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1608111450691!5m2!1sfr!2sbe"
                width="1115" height="450" frameborder="0" style="border: 5px solid lightblue; padding: 5px;"
                allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
            <div class="card border-bottom-0 mt-5 w-75 m-auto">
                <div class="card-header bg-primary text-white">
                    Contact Me
                </div>
                <form action="/store-contact" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Sujet</label>
                            <input type="text" name="sujet" class="form-control w-50">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control w-50">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" rows="4" class="form-control w-50"></textarea>
                        </div>
                    </div>
                    <div class="card-footer bg-primary">
                        <button type="submit" class="btn bg-warning px-3 py-3 text-capitalize">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Your Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>