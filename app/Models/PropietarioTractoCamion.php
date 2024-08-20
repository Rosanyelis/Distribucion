<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropietarioTractoCamion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'propietario_id', 'id');
    }

    public function tractoCamion()
    {
        return $this->belongsTo(TractoCamion::class, 'tracto_camion_id', 'id');
    }
}
