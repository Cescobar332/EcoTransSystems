<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialServicio
 *
 * @property $id
 * @property $fecha
 * @property $hora
 * @property $rol
 * @property $ubicacion_destino
 * @property $ubicacion_llegada
 * @property $peso_paquete
 * @property $valor_paquete
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialServicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'hora', 'rol', 'ubicacion_destino', 'ubicacion_llegada', 'peso_paquete', 'valor_paquete'];


}
