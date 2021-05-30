<?php

namespace App;
use App\Unit;
use App\Barcode;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $guarded = [];
    protected $table = 'master_product_sku';
    protected $primaryKey = 'id';


    public function barcodes(){
        return $this->hasMany(\App\Barcode::class);
    }

    public function units(){
        return $this->hasMany(\App\Unit::class);
    }

    public function user($id){
        return $this->belongsTo(User::class);
    }

}
