<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMotivos extends Model
{
    use HasFactory;

    protected $table = 'sub_motivos';

    protected $fillable = [
        'motivo_id',
        'nombre',
    ];

    public function motivo()
    {
        return $this->belongsTo(Motivos::class, 'motivo_id');
    }
    
}
