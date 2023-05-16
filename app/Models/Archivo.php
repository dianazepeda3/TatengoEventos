<?php

namespace App\Models;

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
}
