<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CamposCampana extends Model
{
    use HasFactory;

    protected $table = 'campos_campanas';

    protected $fillable = [
        'campana_id',
        'grupo_id',
        'nombre_campo',
        'tipo_campo',
        'obligatorio',
        'orden',
        'activo',
    ];

    public function campana()
    {
        return $this->belongsTo(Campanas::class, 'campana_id');
    }

    public function grupoCampo()
    {
        return $this->belongsTo(GruposCampos::class, 'grupo_id');
    }

    public function opciones()
    {
        return $this->hasMany(OpcionesCampo::class, 'campo_id')
            ->where('activo', true)
            ->orderBy('orden', 'asc');
    }
}
