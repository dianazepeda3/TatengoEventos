<?php

namespace App\Models;
use App\Models\Evento;
use App\Models\EventoFoto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash', 
        'nombre', 
        'nombre_original',
        'extension',
        'mime',
    ];

    public function getUrlPathAttribute(){
        return \Storage::url($this->hash);
    }

    public function evento_fotos(){
        return $this->belongsToMany(EventoFoto::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($archivo) {
            $archivo->eventos()->detach();
        });
    }
}
