<?php

namespace App\Models;
use App\Models\Producto;

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
    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($categoria) {
            $categoria->productos()->delete();
        });
    }
}
