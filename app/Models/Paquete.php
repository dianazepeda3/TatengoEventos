<?php

namespace App\Models;
use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'descripcion'];

    public function productos(){
        return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($paquete) {
            $paquete->productos()->detach();
        });
    }
}
