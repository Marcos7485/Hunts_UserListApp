@extends('layouts.main')
@section('title', 'Huntz Teste')

@section('content')
<div class="container" style="padding-bottom: 100px;">
    <h1 class="text-center">Users list</h1>
    <table id="userTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td data-column="name">{{$user['name']}}</td>
                <td data-column="age">{{$user['age']}}</td>
                <td data-column="email">{{$user['email']}}</td>
                <td>
                    <a href="/update/{{$user['id']}}"><button class="btn btn-warning">Editar</button></a>
                </td>
                <td><a href="/delete/{{$user['id']}}"><button id="delete" class="btn btn-danger"><ion-icon name="trash-bin-outline"></ion-icon></button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection