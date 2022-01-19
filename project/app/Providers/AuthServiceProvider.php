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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    $this->registerPostPolicies();

      
    }

        public function registerPostPolicies()
        {
            Gate::define('admin', function ($user) {
                return $user->hasAccess(['admin']);
            });

             Gate::define('student', function ($user) {
                return $user->hasAccess(['student']);
            });
             /*  Gate::define('examiner', function ($user) {
                return $user->hasAccess(['examiner']);
            });
                 Gate::define('finance', function ($user) {
                return $user->hasAccess(['finance']);
            });
                   Gate::define('registrar', function ($user) {
                return $user->hasAccess(['registrar']);
            });
            

               Gate::define('library', function ($user) {
                return $user->hasAccess(['library']);
            });*/
        }
}