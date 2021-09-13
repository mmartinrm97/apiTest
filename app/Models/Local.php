<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->using(LocalProducto::class)
            ->withPivot(["activo"])
            ->withTimestamps();
    }

    public function presentaciones()
    {
        return $this->hasManyDeepFromRelations(
            $this->productos(),
            (new LocalProducto())->presentaciones()
        );
    }
}
