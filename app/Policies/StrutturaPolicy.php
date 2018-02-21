<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Struttura;

class StrutturaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function access(User $user, Struttura $struttura)
    {
        $strutture=$user->strutture()->get();
        foreach ($strutture as $key => $stru) {
            if($stru["id"]==$struttura->id)
                return true;
        }
        return false;
    }
}
