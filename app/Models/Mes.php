<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
    ];
    
    // Esto te permite obtener el nombre automáticamente si no quieres guardarlo en la DB
    public function getNombreCompletoAttribute() {
        return Carbon::parse($this->fecha_inicio)->translatedFormat('F Y');
    }
}
