<div class="sidebar">
    <div class="group">
        <input type="text" required />
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>
            <i class="fa fa-search"></i>Cerca Prenotazione</label>
    </div>
    <ul class="nav flex-column nav-pills nav-laterale">
        
        @if ($dash==true)
        <li class="nav-item">
            <a class="nav-link {{ $page['nome']=='home' ? 'active' : '' }}" href="{{url('strutture') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Prenotazioni</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Finanze</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link {{ $page['nome']=='home' ? 'active' : '' }}" href="{{url('strutture/'.$struttura->id) }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed " href="#submenu1" data-toggle="collapse" data-target="#submenu1">Disponibilità</a>
            <div class="collapse" id="submenu1">
                <ul class="flex-column pl-2 nav">
                    <li class="nav-item">
                        <a class="nav-link py-0" href="#">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed py-1" href="#">Gestisci stanze</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Prenotazioni</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tariffe</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Note/Scadenze</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Finanze</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $page['nome']=='settings' ? 'active' : '' }}" href="{{url('strutture/'.$struttura->id.'/settings') }}">Struttura</a>
        </li>

        @endif

    </ul>
</div>