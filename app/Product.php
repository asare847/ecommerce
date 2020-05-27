<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopemight_also_like($query){
        return $query->inRandomOrder()->take(4);
    }
}
