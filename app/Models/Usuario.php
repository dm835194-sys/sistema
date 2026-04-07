<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Esta línea le da permiso a Laravel de guardar estos campos desde el formulario
    protected $fillable = ['nombre', 'email'];
}