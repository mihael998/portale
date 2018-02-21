<div>
    <nav class="navbar navbar-light navbar-expand navigation-clean" style="background-color:#1997c6;padding-top:5px;padding-bottom:5px;">
        <div class="container">
            <a class="navbar-brand" href="#">Gestionale </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth


            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top:0px;padding-bottom:0px;">
                            <i class="fa fa-user-circle-o" style="/*font-size:32;*/color:#ffffff;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">{{$utente->nome." ".$utente->cognome}}</a>
                            <a class="dropdown-item" role="presentation" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>

                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top:0px;padding-bottom:0px;">
                            <i class="fa fa-building-o" style="color:#ffffff;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            @foreach ($strutture as $struttura)
                            <a class="dropdown-item" role="presentation" href="{{url('strutture/'.$struttura->id) }}">{{$struttura->nome}}</a>
                            @endforeach
                            <hr> 
                            @can('see-group-dashboard')
                            <a class="dropdown-item" role="presentation" href="{{ route('strutture') }}">Vai al menu iniziale</a>
                            @endcan

                        </div>
                    </li>

                </ul>
            </div>
            @endauth


        </div>
    </nav>
</div>