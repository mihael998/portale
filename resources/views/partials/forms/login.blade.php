<div class="login-clean">
    <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration">
            <i class="typcn typcn-home-outline" style="color:#1997c6;"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="codice" placeholder="Codice Struttura" />
        </div>
        <div class="form-group" style="display:none">
            <input class="form-control" value="1" type="text" name="tipo" placeholder="Codice Struttura" />
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password Utente" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" style="background-color:#1997c6;">Accedi </button>
        </div>

        <a href="#" class="forgot">Dimenticato password?</a>
    </form>
</div>