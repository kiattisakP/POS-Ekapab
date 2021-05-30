<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    protected $guarded = [];
    protected $table = 'master_product_barcode';
    protected $primaryKey = 'id';

    public function product(){
        return $this->belongsTo(\App\Product::class);
    }

}

