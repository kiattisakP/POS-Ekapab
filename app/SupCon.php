<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class SupCon extends Model
{
    protected $guarded = [];
    protected $table = 'master_supplier_contact';
    protected $primaryKey = 'id';

    public function sups(){
        return $this->belongsTo(\App\Sup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
