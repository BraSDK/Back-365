<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GruposCampos extends Model
{
    use HasFactory;

    protected $table = 'grupos_campos';

    protected $fillable = [
        'campana_id',
        'nombre_grupo',
        'orden',
        'activo',
    ];

    public function campana()
    {
        return $this->belongsTo(Campanas::class, 'campana_id');
    }

    public function camposCampanas()
    {
        return $this->hasMany(CamposCampana::class, 'grupo_id');
    }
}
