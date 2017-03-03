@extends('layouts.admin')


@section('content')

	<h2>Категории</h2>
  <div class="col-sm-6">
      {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update', $category->id]]) !!}
      <div class="form-group">

        {!! Form::label('name', 'Имя:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Редактировать категорию', ['class'=>'btn btn-primary col-sm-6']) !!}
      </div>

        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
        <div class="form-group">
          {!! Form::submit('Удалить категорию', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
      {!! Form::close() !!}
  </div>




@stop