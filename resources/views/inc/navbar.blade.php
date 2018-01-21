<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand text-warning" href="/">WARNER v0.2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @guest
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">FeedBack</a>
                        </li>
            @else
                <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">FeedBack</a>
                </li>
            @endguest
            <li class="nav-item">
                    @if(Auth::user())
                            <a class="nav-link" href="/blogs">Blog</a>
                    @endif
            </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
           <!-- <li class="btn btn-warning"><a href="{{ route('login') }}">Login</a></li>

            <li class="btn btn-warning"><a href="{{ route('register') }}">Register</a></li> -->
        @else
            <li class="dropdown text-bg-primary">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }}<span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-item" >
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
    
    </div>
  </nav>