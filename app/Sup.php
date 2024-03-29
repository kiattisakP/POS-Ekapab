<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sup extends Model
{
    protected $guarded = [];
    protected $table = 'master_supplier';
    protected $primaryKey = 'id';

    public function supcons(){
        return $this->hasMany(\App\SupCon::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
}
}
