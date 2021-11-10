<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;

    protected $fillable = [
        'local_product_id ',
        'price',
        'presentation',
        'is_active'
    ];

    public function localsproducts(){
        return $this->belongsTo(LocalProduct::class, 'local_product_id');
    }
}
