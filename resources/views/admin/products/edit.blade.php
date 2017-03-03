@extends('layouts.admin')


@section('content')

<h1>Редактирование товара</h1>
<div class="row">
	<div class="col-sm-3">
		<img src="{{$product->photo?'../../../'.$product->photo->file:'../../../images/no_picture.jpg'}}" alt="" class="img-rounded img-responsive">
	</div>
	<div class="col-sm-9">
			{!! Form::model($product,['method'=>'PATCH','action'=>['AdminProductsController@update',$product->id],'files'=>true]) !!}
		<div class="form-group">

			{!! Form::label('name', 'Имя:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">

			{!! Form::label('description', 'Описание товара:') !!}
			{!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
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
			{!! Form::submit('Редактировать', ['class'=>'btn btn-primary col-sm-6']) !!}
		</div>

			{!! Form::close() !!}

			{!! Form::open(['method'=>'DELETE','action'=>['AdminProductsController@destroy',$product->id],'files'=>true]) !!}
				<div class="form-group">
					{!! Form::submit('Удалить товар', ['class'=>'btn btn-danger col-sm-6']) !!}
				</div>
			{!! Form::close() !!}
	</div>
</div>
<div class="row">
	@include('errors.form-error')
</div>


	 @stop