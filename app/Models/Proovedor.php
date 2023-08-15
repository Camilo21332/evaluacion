<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    public function Productos(){
        return $this->belongsToMany('App\Models\Producto');
    }

    use HasFactory;
}
