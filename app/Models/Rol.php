<?php
//app/Models/Rol.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    // Definimos la tabla si no sigue el plural en inglés (roles)
    protected $table = 'roles';

    protected $fillable = ['nombre'];

    // Relación: Un rol tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(User::class, 'rol_id');
    }
}
