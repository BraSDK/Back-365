<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motivos extends Model
{
    use HasFactory;

    protected $table = 'motivos';

    protected $fillable = [
        'nombre',
        'bg_color',
        'border_color',
        'text_color',
    ];

    public function subMotivos()
    {
        return $this->hasMany(SubMotivos::class, 'motivo_id');
    }
}
