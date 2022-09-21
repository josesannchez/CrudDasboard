<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobro
 *
 * @property $id
 * @property $servicios_id
 * @property $pacientes_id
 * @property $citas_id
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita $cita
 * @property Paciente $paciente
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cobro extends Model
{
    
    static $rules = [
		'servicios_id' => 'required',
		'pacientes_id' => 'required',
		'citas_id' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['servicios_id','pacientes_id','citas_id','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cita()
    {
        return $this->hasOne('App\Models\Cita', 'id', 'citas_id');
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
