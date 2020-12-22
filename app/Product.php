<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'stocks'
    ];

    public function category() {
        $this->belongsTo('App\Category', 'cid');
    }
}
