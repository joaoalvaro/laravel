<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use Gate;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vacancy $vacancy) {
        //Mostra todas as vagas cadastradas
        $vacancies = $vacancy->all();

        //Mostra apenas as vagas cadastradas pelo usuário logado no momento
        //$vacancies = $vacancy->where('user_id', auth()->user()->id)->get();
        return view('site.home', compact('vacancies'));
    }

    public function update($idVacancy) {

        $vacancy = Vacancy::find($idVacancy);

        //$this->authorize('update-vacancy', $vacancy);
        return view('site.vacancy-update', compact('vacancy'));
    }

    public function rolesPermission() {
        $nameUser = auth()->user()->name;

        var_dump(" <h2> {$nameUser} </h2>");

        foreach (auth()->user()->roles as $role) {
            echo "$role->name -> ";

            $permissions = $role->permissionsList;
            foreach ($permissions as $permission) {
                return " $permission->name ";
                
            }
        }
    }

}
