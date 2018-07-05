        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav-left">
                        <a class="navbar-brand" href="{{ url('/game') }}">
                            Clicker PVP
                        </a>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul >
                        <!-- Authentication Links -->
                        @guest
                            <li >
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li >
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-loguot" >
                                <a  href="#" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                                <div >
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
