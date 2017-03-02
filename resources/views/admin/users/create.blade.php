@extends('layouts.admin')


@section('content')

<h1>Создание пользователя</h1>

	{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
<div class="form-group">

	{!! Form::label('name', 'Имя:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('email', 'email:') !!}
	{!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('role_id', 'Роль:') !!}
	{!! Form::select('role_id', [''=>'Выбирайте']+ $roles, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('is_active', 'Статус:') !!}
	{!! Form::select('is_active', array(1=>'Активирован',0=>"Не активирован"), 0,['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('file', 'Аватарка:') !!}
	{!! Form::file('file', null,['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('password', 'Пороль пользователя:') !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Создать пользователя', ['class'=>'btn btn-primary']) !!}
</div>

	{!! Form::close() !!}


@include('errors.form-error')

	 @stop