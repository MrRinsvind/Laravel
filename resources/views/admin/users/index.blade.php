@extends('layouts.admin')


@section('content')

	<h2>Пользователи</h2>
          
        @if(Session::has('deleted_user'))
            <p class="bg-danger">{{session('deleted_user')}}</p>
        @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Аватар</th>
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
        <td><img height='50' src="{{$user->photo?'..'.$user->photo->file:'../images/no_picture.jpg'}}" alt=""></td>
        <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user['name']}}</a></td>
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