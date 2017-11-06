{{-- top bar  --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }} {{ app()->version() }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
{{--        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        </ul>--}}

<!-- Right Side Of Navbar -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">

        <!-- Authentication Links -->
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                       id="navbarDropdownMenuLink"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span> </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My profile</a>
                        <a class="dropdown-item" href="#">My Account</a>
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>


</nav>