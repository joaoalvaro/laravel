<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Vacancy;

class VacancyPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    public function updateVacancy(User $user, Vacancy $vacancy){
        return $user->id == $vacancy->user_id;
    }
}
