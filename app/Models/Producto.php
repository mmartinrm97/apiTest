<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\VarDumper\Presenter;

class Producto extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;


    public function locales()
    {
        return $this->belongsToMany(Local::class)->using(LocalProducto::class)
            ->withPivot(["activo"])
            ->withTimestamps();
    }


    // public function presentaciones()
    // {
    //     return $this->hasManyDeepFromRelations(
    //         $this->locales(),
    //         (new LocalProducto())->presentaciones()
    //     );
    // }
}
