<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'cargo','sexo', 'edad','fecha_nacimiento', 'aptitudes','user_name', 'password', 'email', 'compañia'];

    public function aptitudes()
    {
        return $this->belongsToMany('App\Models\Aptitud');
    }
    const TIPO_EMPLEADO = 'empleado';
    const TIPO_EMPLEADOR = 'empleador';
    const TIPO_DESEMPLEADO = 'desempleado';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',

    ];

        /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
