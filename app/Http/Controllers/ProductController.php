<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Products;
use App\Cart;

class ProductController extends Controller
{
     public function index()
    {
        $products = Products::all();
        return view('welcome',compact('products'));
    }

    public function getAddToCart(Request $request, $id){

    	$product = Products::find($id);

    	$tovar = array(
			'id' => $product->id, 
			'name' => $product->name, 
			'category' => $product->category->name, 
			'price' => $product->price
		);
    	if (Session::has('basket')){

    		if(array_key_exists($tovar['id'], Session::get('basket'))){
    			$stoedItem = Session::get('basket');
    			Session::forget('basket');
    			$stoedItem[$tovar['id']]['q']+=1;
    			$stoedItem[$tovar['id']]['p']=$stoedItem[$id]['q']*$stoedItem[$id]['product']['price'];
    			Session::forget('basket');
    			Session::put('basket', $stoedItem);
    		}
    		else{
    			$stoedItem = Session::get('basket');
    			Session::forget('basket');
    			$stoedItem[$tovar['id']]=array(
    										'product'=>$tovar,
    										'q'=>1,
    										'p'=>$product->price
				    						);
    							
    			Session::put('basket', $stoedItem);
    		}
    	}
    	else
    	{
    		$first = array(
    						$tovar['id'] => $second=array(
				    										'product'=>$tovar,
				    										'q'=>1,
				    										'p'=>$product->price
				    									)
    						);
    		Session::put('basket', $first);
	    }
	    	
		
    	return redirect('/');


    }
    public function getCart(){
    	
    	if (Session::has('basket')){
    		$products=Session::get('basket');
    	}
    	else{
    		$products=null;
    	}
    	$finaly=0;
    	 return view('basket',compact('products','finaly'));
    }
}
