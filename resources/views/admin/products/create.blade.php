@extends('layouts.admin')


@section('content')

<h1>Создание Товара</h1>

	{!! Form::open(['method'=>'POST','action'=>'AdminProductsController@store','files'=>true]) !!}
<div class="form-group">

	{!! Form::label('name', 'Имя:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('description', 'Описание товара:') !!}
	{!! Form::textarea('description', '', ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('category_id', 'Категория:') !!}
	{!! Form::select('category_id', [''=>'Выбирайте']+ $categories, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('price', 'Цена:') !!}
	{!! Form::text('price', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">

	{!! Form::label('photo_id', 'Изображение товара:') !!}
	{!! Form::file('photo_id', null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit('Создать товар', ['class'=>'btn btn-primary']) !!}
</div>

	{!! Form::close() !!}


@include('errors.form-error')

	 @stop