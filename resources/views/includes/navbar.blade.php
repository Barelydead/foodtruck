<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Foodtruck mania</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/trucks')}}">Trucks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/map')}}">Map</a>
                </li>
            </ul>

            <ul class="navbar-nav right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('login') ? 'active' : '') }}">
                        <a href="{{ url('login') }}">
                            <i class="fa fa-sign-in"></i> Login
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ URL::to('admin') }}">Username</a>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
