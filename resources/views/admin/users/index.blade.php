@extends('layouts.admin')


@section('content')

	<h2>Пользователи</h2>
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Статус</th>
        <th>Активация</th>
        <th>Updated</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
	@if($users) @foreach($users as $user)
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
         <td>{{$user->role->name}}</td>
        <td>{{$user['is_active']==1? 'Активирован':"Не активирован"}}</td>
        <td>{{$user['created_at']}}</td>
        <td>{{$user['updated_at']}}</td>

      </tr>

	@endforeach @endif



    </tbody>
  </table>




@stop