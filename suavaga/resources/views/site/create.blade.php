@extends('templateTeste')

@section('content')

<style>
    html, body {
        background-color: #fff;
        color: #000;
        font-family: 'Verdana', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .footer > a{
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        margin-left: 20px;
        text-align: left;
    }

    .footer{
        background-color: #000;
        padding-top: 35px;
        padding-bottom: 50px;
    }

    .footer > li{
        margin-left: 5px;
        margin-bottom: 2px;
        margin-top: 1px;
    }

    .footer > li > a{
        color: #fff;
    }

    .botao{
        margin-top: 20px;
    }
    
    .teste > form-control{
        color: #000;
    }
    
    .form-section{
        font-family: 'Raleway', sans-serif;
    }
    
    .control-label{
        font-family: 'Raleway', sans-serif;
    }

</style>

<h1 class="titulo-pag">Nova Vaga</h1>

@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
</div>
@endif

@if(isset($vacancies))
    <form class="form-vertical" method="post" action="{{route('new.update', $vacancies->id)}}">
        {!! method_field('PUT') !!}
@else
    <form class="form-vertical" method="post" action="{{route('new.store')}}">
@endif
    {!! csrf_field() !!}


    <div class="container">
        <div class="form-body">

            <div class="row">
                <div class="col-md-12">
                    <h3 class="form-section">Vaga</h3>
                </div>
            </div>
            <div class="row">

               
                <div class="form-group">
                     <div class="teste">
                    <div class="col-md-6">
                        <label class="control-label">Título Vaga
                            <span class="required"> * </span>
                        </label>
                        <input type="text" name="title" data-required="1" class="form-control" value="{{$vacancies->title or old('title')}}" />
                    </div>
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Descrição
                            <span class="required"> * </span>
                        </label>
                        <textarea name="description" id="txtMensagem" rows="5" class="form-control" style="width:100%;" value="{{$vacancies->description or old('description')}}"></textarea>
                    </div>
                </div>

            </div>    
            <div class="row">
                <div class="form-group">

                    <div class="col-md-6">
                        <label class="control-label">Empresa
                            <span class="required"> * </span>
                        </label>     
                        <input name="company" type="text" class="form-control" value="{{$vacancies->company or old('company')}}" /> 
                    </div>
                    
                    
                    <div class="col-md-6">
                        <label class="control-label">Salário
                            <span class="required"> * </span>
                        </label>     
                        <input name="salary" type="number" class="form-control" value="{{$vacancies->salary or old('salary')}}" /> 
                    </div>

                </div>
            </div>
            
            <div class="row">
                <div class="form-group">

                    <div class="col-md-5">
                        <label class="control-label">Cidade
                            <span class="required"> * </span>
                        </label>     
                        <input name="city" type="text" class="form-control" value="{{$vacancies->city or old('city')}}" /> 
                    </div>
                    
                    
                    <div class="col-md-5">
                        <label class="control-label">E-mail para contato
                            <span class="required"> * </span>
                        </label>     
                        <input name="email_contact" type="email" class="form-control" value="{{$vacancies->email_contact or old('email_contact')}}"/> 
                    </div>
                    
                   
                    <div class="col-md-2"> 
                        <input name="user_id" type="hidden" class="form-control" value="{{Auth::user()->id}}"/> 
                    </div>
                    
                    <div class="col-md-2">
                        <label class="control-label">Views
                        </label>     
                        <input name="visualizations" type="number" class="form-control" value="{{$vacancies->visualizations or old('visualizations')}}"/> 
                    </div>

                </div>
            </div>

            <!-- Fim form-body --->
        </div>

        <!-- Fim container --->
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9 botao">
                <button class="btn btn-primary">Salvar</button>
                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
            </div>
        </div>
    </div>
</form>


@endsection