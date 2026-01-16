<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campanas extends Model
{
    use HasFactory;

    protected $table = 'campanas';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function gruposCampos()
    {
        return $this->hasMany(GruposCampos::class, 'campana_id');
    }

    public function camposCampanas()
    {
        return $this->hasMany(CamposCampana::class, 'campana_id');
    }
}
