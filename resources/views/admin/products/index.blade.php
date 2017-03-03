@extends('layouts.admin')


@section('content')

	<h2>Пользователи</h2>
          
        @if(Session::has('deleted_product'))
            <p class="bg-danger">{{session('deleted_product')}}</p>
        @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Картинка</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>Updated</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
	@if($products) @foreach($products as $product)
      <tr>
        <td>{{$product['id']}}</td>
        <td><img height='50' src="{{$product->photo?'..'.$product->photo->file:'../images/no_picture.jpg'}}" alt=""></td>
        <td>{{$product['name']}}</td>
        <td>{{$product['category']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['created_at']}}</td>
        <td>{{$product['updated_at']}}</td>

      </tr>

	@endforeach @endif



    </tbody>
  </table>




@stop