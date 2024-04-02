<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Animales extends Model
{
    protected $fillable = [
        'id',
        'nombre',
    ];

    public function especies()
    {
        return $this->belongsTo(Especies::class, 'id');
    }
}
