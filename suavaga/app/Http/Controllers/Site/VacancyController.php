<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vacancy;
use App\User;

class VacancyController extends Controller
{
    
    private $vacancy;
    
    public function __construct(Vacancy $vacancy) {
        
        $this->vacancy = $vacancy;
    }
    
    public function index(Vacancy $vacancy)
    {
         $vacancy = $this->vacancy->paginate(5);
       
       return view('home', ['vacancies'=>$vacancy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        
        return view('site.create');//Mudar
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega todos os dados vindos do formulário
        $dadosForm = $request->all();
        
        //Inseri os dados no banco
        $insert = $this->vacancy->create($dadosForm);
        
        if($insert){
            return redirect()->route('new.index');
        }else {
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
