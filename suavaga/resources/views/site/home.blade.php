@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
        </tr>
        @forelse($vacancies as $vacancy)
            
            <tr>
                <td>{{$vacancy->id}}</td>
                <td> <a href="{{ url("/vacancy/$vacancy->id/update") }}"> {{$vacancy->title}} </a> </td>
                <td>{{$vacancy->description}}</td>
            </tr>

           
            @empty
            <p>Não há vagas cadastradas no momento!</p>
        @endforelse

    </table>
    
    <a href="{{ url('admin/users') }}" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus"></span> Usuários</a>
    
    <a href="{{route('new.create')}}" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus"></span> Cadastrar</a>

</div>



@endsection
