<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SemiRemolque extends Model
{
    use HasFactory;

    protected $guarded = [];

    

    public function files(): HasMany
    {
        return $this->hasMany(Files::class, 'semi_remolque_id', 'id');
    }
}
