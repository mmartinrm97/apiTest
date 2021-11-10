<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LocalProduct extends Pivot
{
    use HasFactory;


    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function locals(){
        return $this->belongsTo(Local::class);
    }

    public function presentations(){
        return $this->hasMany(Presentation::class, 'local_product_id');
    }
}
