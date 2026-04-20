<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_id',
        'url',
        'procesada',
        'fecha'
    ];

    protected $casts = [
        'procesada' => 'boolean',
        'fecha' => 'date'
    ];

    // 🔗 Relación: la imagen pertenece a un animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}