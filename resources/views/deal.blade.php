@extends('layouts.app')

@section('content')


<row>
	<div class="col-xs-6 col-xs-offset-3">
		<h3 style="text-align:center">После заполнения формы мы свяжемся с вами в ближайшее время</h3>
			{!! Form::open(['method'=>'POST']) !!}
		<div class="form-group">
	
			{!! Form::label('name', 'Ваше имя:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">

			{!! Form::label('email', 'Ваш email:') !!}
			{!! Form::text('email', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">

			{!! Form::label('role_id', 'Ваш телефон:') !!}
			{!! Form::text('phone', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			 <a href="{{url('/')}}" class="btn btn-success pull-right" role="button">Купить</a>
		</div>


			{!! Form::close() !!}

	</div>
</row>
@include('errors.form-error')

	 @stop