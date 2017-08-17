@extends('layouts.app')

@section('content')
<form action="{{ route('admin.assign') }}" method="post">
<div class="container">
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-Mail</th>
        <th>Usuário</th>
        <th>Recrutador</th>
        <th>Admin</th>
        <th></th>
        </thead>
        <tbody>
        
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }} 
                <input type="hidden" name="email" value="{{ $user->email }}"></td>
                <td><input type="checkbox" {{ $user->temFuncao('Usuario') ? 'checked' : '' }} name="role_user"></td>
                <td><input type="checkbox" {{ $user->temFuncao('Recrutador') ? 'checked' : '' }} name="role_recrutador"></td>
                <td><input type="checkbox" {{ $user->temFuncao('Admin') ? 'checked' : '' }} name="role_admin"></td>
                {{ csrf_field() }}
                <td><button type="submit">Atribuir Função</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</form>
@endsection