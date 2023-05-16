<?php

namespace App\Models;
//use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function paquete(){
        return $this->belongsToMany(Paquete::class)->withPivot('cantidad');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($producto) {
            $producto->paquete()->detach();
        });
    }
}
