<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = [
        'descripcion'
    ];

    public function products()
    {
        // return $this->belongsToMany(Product::class)->using(LocalProduct::class)
        //     ->withPivot(['id', 'is_active'])->withTimestamps();

        return $this->belongsToMany(Product::class)->using(LocalProduct::class)
            ->withPivot(['id', 'is_active'])
            ->withTimestamps();
    }

    public function presentations()
    {
        return $this->hasManyThrough(
            Presentation::class,
            LocalProduct::class,
            'local_id',
            'local_product_id'
        );
    }

    public function localproducts()
    {
        return $this->hasMany(LocalProduct::class);
    }
}
