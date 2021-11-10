<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion'
    ];

    public function locals()
    {
        // return $this->belongsToMany(Local::class, 'locals_products')
        //     ->withPivot('is_active')->withTimestamps();

        return $this->belongsToMany(Local::class)->using(LocalProduct::class)
            ->withPivot(['id', 'is_active'])
            ->withTimestamps();

        // return $this->hasMany(LocalProduct::class);
    }

    public function presentations()
    {
        return $this->hasManyThrough(
            Presentation::class,
            LocalProduct::class,
            'product_id',
            'local_product_id'
        );
    }

    public function localproducts()
    {
        return $this->hasMany(LocalProduct::class);
    }
}
