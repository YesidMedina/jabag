<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Barberium
 *
 * @property $id
 * @property $nombreProducto
 * @property $descripcion
 * @property $precio
 * @property $imagen
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Barberium extends Model
{
    
    static $rules = [
		'nombreProducto' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'imagen' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreProducto','descripcion','precio','imagen','codigo'];



}
