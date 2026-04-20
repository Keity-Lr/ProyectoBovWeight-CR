<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_arete',
        'nombre',
        'raza',
        'fecha_nacimiento',
        'estado',
        'finca_id'
    ];

    // 🔗 Relación: el animal pertenece a una finca
    public function finca()
    {
        return $this->belongsTo(Finca::class);
    }

    // 🔗 Relación: un animal tiene muchos pesajes
    public function pesajes()
    {
        return $this->hasMany(Pesaje::class);
    }

    // 🔗 Relación: un animal tiene muchas imágenes
    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }
}