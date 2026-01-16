<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpcionesCampo extends Model
{
    use HasFactory;

    protected $table = 'opciones_campos';

    protected $fillable = [
        'campo_id',
        'opcion',
        'orden',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
    ];

    public function campoCampana()
    {
        return $this->belongsTo(CamposCampana::class, 'campo_id');
    }
}
