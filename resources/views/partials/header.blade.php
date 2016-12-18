
<nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" >Acasa</a>

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        @if(Auth::user())
                            {{Auth::user()->firstName}} {{Auth::user()->lastName}}
                        @endif
                        @if(!Auth::user())
                            <i class="fa fa-user" aria-hidden="true"></i> Admin
                        @endif
                        <span class="caret"></span></a>


                    @if(Auth::user())
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin.reservations') }}">Rezervari</a></li>
                            <li><a href="#">Comenzi</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">Sign up</a></li>
                            <li><a href="{{route('user.logout')}}">Logout</a></li>
                        </ul>
                    @endif
                    @if(!Auth::user())
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.signin') }}">Login</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    @endif




                </li>
            </ul>
            <ul >



            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

