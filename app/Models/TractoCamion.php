<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class TractoCamion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function semiRemolque(): HasOne
    {
        return $this->hasOne(SemiRemolque::class, 'tracto_camion_id', 'id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(Files::class, 'tracto_camion_id', 'id');
    }

    public function propietarios(): MorphToMany
    {
        return $this->morphToMany(Propietario::class, 'PropietarioTractoCamion');
    }



}
