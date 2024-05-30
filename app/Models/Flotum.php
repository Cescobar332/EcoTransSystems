<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flotum
 *
 * @property $id
 * @property $fecha
 * @property $hora
 * @property $tipo
 * @property $estado
 * @property $id_asignado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Flotum extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'hora', 'tipo', 'estado', 'id_asignado'];


}
