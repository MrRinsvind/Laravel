@extends('layouts.admin')


@section('content')

<h1>Редактирование пользователя</h1>
<div class="row">
	<div class="col-sm-3">
		<img src="{{$user->photo?'../../../'.$user->photo->file:'../../../images/no_picture.jpg'}}" alt="" class="img-rounded img-responsive">
	</div>
	<div class="col-sm-9">
			{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
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
			{!! Form::select('is_active', array(1=>'Активирован',0=>"Не активирован"), null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">

			{!! Form::label('photo_id', 'Аватарка:') !!}
			{!! Form::file('photo_id', null,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">

			{!! Form::label('password', 'Пороль пользователя:') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Редактировать', ['class'=>'btn btn-primary col-sm-6']) !!}
		</div>

			{!! Form::close() !!}

			{!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id],'files'=>true]) !!}
				<div class="form-group">
					{!! Form::submit('Удалить пользователя', ['class'=>'btn btn-danger col-sm-6']) !!}
				</div>
			{!! Form::close() !!}
	</div>
</div>
<div class="row">
	@include('errors.form-error')
</div>


	 @stop