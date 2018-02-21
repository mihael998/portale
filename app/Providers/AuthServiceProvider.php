<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        "App\Struttura"=>"App\Policies\StrutturaPolicy",
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('see-group-dashboard', function ($user) {
            return $user->admin ==1;
        });
        Gate::define('edit-property', function ($user) {
            return $user->admin ==1;
        });
        //
    }
}
