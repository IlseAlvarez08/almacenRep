<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable = ['id_producto','codigo_barras','num_producto','cantidad_prod','nom_prod','ingred_activo','indicacion','tipo_unidad','precio_venta','prec_total'];
}
