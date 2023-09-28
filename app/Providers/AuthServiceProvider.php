<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("admin",function(User $user){
            return $user->hasRole("Administrateur");
        });

        Gate::define("Inspecteur",function(User $user){
            return $user->hasRole("Inspecteur");
        });

        Gate::define("Armateur",function(User $user){
            return $user->hasRole("Armateur");
        });

        Gate::define("Agent",function(User $user){
            return $user->hasRole("Agent");
        });

        Gate::define("Agent_Amarteur",function(User $user){
            return $user->hasAnyRole(["Agent","Armateur","directeur"]);
        });

        Gate::define("directeur",function(User $user){
            return $user->hasAnyRole(["Inspecteur","admin","Armateur", "Agent"]);
        });
    }
}
