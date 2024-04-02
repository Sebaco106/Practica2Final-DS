<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Actividades extends Model
{
    protected $fillable = [
        'id',
        'horario',
    ];
    public function animales()
    {
        return $this-belongsTo(Animales::class, 'id')
            ->with('especies');
    }
}