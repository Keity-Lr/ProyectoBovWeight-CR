<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'user_id'
    ];

    // 🔗 Relación: una finca pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 Relación: una finca tiene muchos animales
    public function animales()
    {
        return $this->hasMany(Animal::class);
    }
}