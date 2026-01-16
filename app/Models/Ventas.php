<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ventas extends Model
{
    use HasFactory;
    
    protected $table = 'ventas';

    protected $fillable = [
        'mes_id',
        'user_id',
        'campana_id',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'motivo_id',
        'submotivo_id',
        'imagen_dni',
        'f_instalado',
        'f_edition',
        'edited_by',
    ];

    // 🔗 Relaciones principales

    public function campana()
    {
        return $this->belongsTo(Campanas::class);
    }

    public function valores()
    {
        return $this->hasMany(VentaValores::class);
    }

    public function motivo()
    {
        return $this->belongsTo(Motivos::class);
    }

    public function submotivo()
    {
        return $this->belongsTo(SubMotivos::class);
    }
}
