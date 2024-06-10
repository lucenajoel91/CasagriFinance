<header class="main-header">

    <a href="#" class="logo" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="logo-mini"><img src="http://localhost/CasagriFinance/public/dist/img/Logos/logowhite.png" alt=""  width="20" height="auto"></span>
        <span class="logo-lg"><img src="http://localhost/CasagriFinance/public/dist/img/Logos/logo_hor2.png" alt=""  width="150" height="auto"></span> 
    </a>

    <nav class="navbar navbar-static-top">
        <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </a> -->

        

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ auth()->user()->name}}
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-primary btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout')}}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();" class="btn btn-danger btn-flat">Salir</a>
                            </div>
                            <form method="post" id="logout-form" action="{{ route('logout')}}">
                                @csrf

                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>