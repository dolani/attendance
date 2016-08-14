<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand">School Name/Logo</a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}"><span>Home <span class="border"></span></span></a></li>
                    <!-- For authenticated users -->
                    @if(Auth::check())
                    <li><a href="{{ url('auth/logout') }}"><span>Logout <span class="border"></span></span></a></li>
                    <li><a href="{{url('/signature') }}">Welcome {{ Auth::user()->first_name }}</a></li>
                    <li><a href="{{url('#') }}"><img src="{{Auth::user()->picture_url}}" width="30" height="20" class="img-responsive img-rounded"/></a></li>
                    <!-- else we show login and register link -->
                    @else
                    <li><a href="{{ url('login') }}"><span>Login <span class="border"></span></span></a></li>
                    <li><a href="{{url('register')}}"><span>Register<span class="border"></span></span></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END .header -->