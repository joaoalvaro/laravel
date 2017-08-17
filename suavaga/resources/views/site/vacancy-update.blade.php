@extends('layouts.app')

@section('content')
<div class="container">

        <h3><b>Sobre a vaga</b></h3>

        <ul>

            <li> <b>Cargo:</b> {{ $vacancy->title }} </li>

            <li> <b>Descrição da Vaga:</b> {{ $vacancy->description }}</li>

            <li> <b>Empresa:</b> {{ $vacancy->company }}</li>

            <li> <b>Salário:</b> {{ $vacancy->salary }}</li>

            <li> <b>Cidade:</b> {{ $vacancy->city }}</li>

            <li> <b>Contato:</b> {{ $vacancy->email_contact }}</li>
        </ul>

        <h3><b>Exigências</b></h3>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <h3><b>Benefícios</b></h3>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>


        <br>
        <b> Recrutador:</b>  {{ $vacancy->user->name }}
        <!--a href="{{ url("/vacancy/$vacancy->id/update") }}"> </a-->
        <hr>  

        <div buttonOptions>
            <button type="button" class="btn btn-info">Editar Vaga</button>
            <button type="button" class="btn btn-danger">Excluir Vaga</button>
        </div
        </br>
        <a href="{{ route('home')}}">  <button class="btn btn-danger">Voltar</button> </a>

</div>

@endsection
