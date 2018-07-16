<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="container-display">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav-left">
                        <a class="navbar-brand" href="{{ url('/game') }}">
                            Clicker PVP
                        </a>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="item-nav list-icons">
                            <div class="titlebox">Login with</div>
                            
                            <ul >
                                <li>
                                    <a href="{{ url('auth/google') }}" class="nav-link">
                                    <img class="icon" src="{{ asset('img/gg-icon.png') }}" alt="">
                                    </a>


                                </li>
                                <li>
                                    <a  href="{{ url('auth/facebook') }}" class="nav-link">
                                    <img class="icon" src="{{ asset('img/fb-icon.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>

                            </li>

                        @else
                            <li >
                                <a  href="#" >
                                    {{ Auth::user()->name }} 
                                </a>

                            </li> 
                            <li class="nav-loguot" >

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        {{ __('Logout') }}
                                    </a>
                                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
