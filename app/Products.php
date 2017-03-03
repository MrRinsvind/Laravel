<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $fillable = [
        'name', 'description', 'price', 'category_id', 'photo_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function photo(){
        
        return $this->belongsTo('App\Photo');

    }
}
