@extends('layouts.app')

@section('content')
<div class="container">
    <div id="page-wrapper">

            <div class="container-fluid">

               

                

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Список товаров</h2>

                    </div>


                    <div class="x_content">
                        
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 10">Logo</th>
                                <th style="width: 20%">Название товара</th>
                                <th style="width: 30%">Категория</th>
                                <th>Описание</th>
                               
                                <th style="width: 20%">Цена</th>
                                <th>Купить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($products)) @foreach($products as $product)
                                    <tr>
                                        <td> <img height='50' src="{{$product->photo?$product->photo->file:'images/no_picture.jpg'}}" alt=""> </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Купить</a>

                                        </td>
                                    </tr>
                            @endforeach @endif
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div> 
        </div>   
</div>
@endsection
