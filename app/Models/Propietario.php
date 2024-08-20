<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Propietario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function files(): HasMany
    {
        return $this->hasMany(Files::class, 'propietario_id', 'id');
    }

    public function cuentas(): HasMany
    {
        return $this->hasMany(CuentaBancaria::class, 'propietario_id', 'id');
    }

    public function tractocamions(): MorphToMany
    {
        return $this->morphToMany(TractoCamion::class, 'PropietarioTractoCamion');
    }
}
