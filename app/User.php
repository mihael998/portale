<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function strutture(){
        return $this->belongsToMany(Struttura::class, 'personale_strutture', 'id_personale', 'id_struttura');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','cognome','numero', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'personale';
    protected $hidden = [
         'remember_token',
    ];
}