<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function tramo()
    {
        return $this->belongsTo(Tramo::class, 'tramo_id', 'id');
    }

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'propietario_id', 'id');
    }

    public function tractoCamion()
    {
        return $this->belongsTo(TractoCamion::class, 'tracto_camion_id', 'id');
    }
}
