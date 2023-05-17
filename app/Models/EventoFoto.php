<?php

namespace App\Models;
use App\Models\Archivo;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoFoto extends Model
{
    use HasFactory;

    public function archivos(){
        return $this->belongsToMany(Archivo::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($eventofoto) {
            $eventofoto->archivos()->detach();
        });
    }
}
