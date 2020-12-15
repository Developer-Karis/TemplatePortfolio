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
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About me</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="btn btn-primary py-2 px-3 mr-3 mt-4 ml-3"
                        style="border: 2px solid black;">Admin</a>
                </li>
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
                        <a class="btn btn-danger py-2 px-3 mr-3 mt-4" style="border: 2px solid black;"
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