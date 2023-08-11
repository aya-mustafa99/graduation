<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
public function plants(){
    return $this->hasMany(plant::class);
}


    use HasFactory;
}
