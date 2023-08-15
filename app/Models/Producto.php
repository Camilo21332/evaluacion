<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function Cliente(){
        return $this->belongsToMany('App\Models\Cliente');
    }
    public function Proveedor(){
        return $this->belongsTo('App\Models\Proveedor');
    }

    use HasFactory;
}
