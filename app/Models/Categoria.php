<?php

namespace App\Models;
use App\Models\Producto;
use App\Models\Evento;
use App\Models\EventoFoto;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'descripcion', 'categoria_de'];
   
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function evento_fotos()
    {
        return $this->hasMany(EventoFoto::class);
    }
    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($categoria) {
                      
            // Obtener los paquetes asociados a la categoría
            $paquetes = $categoria->productos()->whereHas('paquete')->get();

            // Eliminar los productos en los paquetes
            foreach ($paquetes as $paquete) {
                $paquete->paquete()->detach();
            }
            $categoria->productos()->delete();  
            $categoria->eventos()->delete();
        });
    }
}
