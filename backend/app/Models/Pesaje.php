<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_id',
        'peso_estimado',
        'peso_real',
        'fecha',
        'fuente'
    ];

    // 🔗 Relación: un pesaje pertenece a un animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}