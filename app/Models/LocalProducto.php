<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LocalProducto extends Pivot
{
    use HasFactory;

    public function presentaciones()
    {
        return $this->belongsToMany(
            Presentacion::class,
            'local_producto_presentacions',
            'local_producto_id',
            'presentacion_id'
        )
            ->withPivot(["activo"])
            ->withTimestamps();
    }
}
