<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function entregas()
    {
        return $this->hasMany(Entrega::class, 'tramo_id', 'id');
    }
}
