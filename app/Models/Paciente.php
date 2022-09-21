<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class Paciente
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
class Paciente extends Model
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
        return $this->hasMany('App\Models\Cita', 'pacientes_id', 'id');
    }
    
    protected $hidden = [
      'password',
      'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
}
