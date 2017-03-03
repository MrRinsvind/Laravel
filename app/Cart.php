<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
/*
Type error: Argument 1 passed to Illuminate\Database\Eloquent\Model::__construct() must be of the type array, object given, called in /Applications/MAMP/htdocs/laravel/app/Http/Controllers/ProductController.php on line 26
*/
    public function __constract($oldCart)
    {
    	if(!empty($oldCart)){
	    	$this->items = $oldCart->items;
	    	$this->totalQty = $oldCart->totalQty;
	    	$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item,$id)
    {
    	$storedItem = [
    		'qty'=> 0, 'price'=>$item->price, 'item'=>$item
    	];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$stoedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalPrice += $this->price;
    }
}
