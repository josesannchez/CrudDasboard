<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $pacientes_id
 * @property $doctores_id
 * @property $servicios_id
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $hora_inicio
 * @property $hora_final
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctore $doctore
 * @property Paciente $paciente
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'pacientes_id' => 'required',
		'doctores_id' => 'required',
		'servicios_id' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'hora_inicio' => 'required',
		'hora_final' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pacientes_id','doctores_id','servicios_id','fecha_inicio','fecha_fin','hora_inicio','hora_final'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctore()
    {
        return $this->hasOne('App\Models\Doctore', 'id', 'doctores_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'pacientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }
    

}
