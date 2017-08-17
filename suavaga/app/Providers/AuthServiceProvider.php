<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Vacancy;
use App\Policies\VacancyPolicy;
use \App\Permission;


class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       // Vacancy::class => VacancyPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();

      /*  Gate::define('update-vacancy', function (User $user, Vacancy $vacancy) {
            return $user->id == $vacancy->user_id;
        });*/
        
       $permissions = Permission::with('roles')->get();
       
       foreach ($permissions as $permission) {
           Gate::define($permission->name, function (User $user) use ($permission) {
            return $user->temPermissao($permission);
           });
       }
       
       Gate::before(function(User $user, $ability){
          if($user->temAlgumaPermissao('Admin')){
              return true;
          }
       });
    }   
}