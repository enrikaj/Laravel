<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price'];

    protected $guarded = ['delete_photo'];

    //const CREATED_AT = 'creation_date';

    public function category() 
    {
      return $this->belongsTo('App\Category');
    }


}
