<?php

namespace App\Models;
use App\Models\Archivo;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function paquetes(){
        return $this->belongsToMany(Paquete::class)->withPivot('cantidad');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($evento) {
            $evento->paquetes()->detach();
        });
    }
}
