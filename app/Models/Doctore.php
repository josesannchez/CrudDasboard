<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctore
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $cedula
 * @property $correo
 * @property $Contraseña
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'cedula' => 'required',
		'correo' => 'required',
		'Contraseña' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','cedula','correo','Contraseña'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'doctores_id', 'id');
    }
    

}
