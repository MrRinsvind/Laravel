@extends('layouts.app')

@section('content')

<div class="container">

</div>
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Количество</th>
                        <th class="text-center">Цена</th>
                        <th class="text-center">Всего</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @if(!is_null($products)) @foreach($products as $product)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px; margin-right: 15px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{$product['product']['name']}}</a></h4>
                                <h5 class="media-heading"> Категория: <a href="#">{{$product['product']['category']}}</a></h5>
                                <span>Статус: </span><span class="text-success"><strong>Доступен</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$product['q']}}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['product']['price']}}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{$product['p']}} грн</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Удалить
                        </button></td>
                    </tr>
				<?php $finaly+=$product['p'];?>
                 @endforeach @endif   
                </tbody>
                <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Всего</h3></td>
                        <td class="text-right"><h3>{{$finaly}} </h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="{{ url('/') }}"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Продолжить покупки
                        </button></a></td>
                        <td>
                        <a href="{{ url('/deal') }}"><button type="button" class="btn btn-success">
                            Оформить заказ <span class="glyphicon glyphicon-play"></span>
                        </button></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection