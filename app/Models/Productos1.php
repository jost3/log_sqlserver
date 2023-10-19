<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Productos1
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $categoria
 * @property $proveedor
 * @property $existencias
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Productos1 extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'categoria' => 'required',
		'proveedor' => 'required',
		'existencias' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','categoria','proveedor','existencias','descripcion'];
    protected $table = 'productos1';
    public function fromDateTime($value)
    {
        return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    }



}
