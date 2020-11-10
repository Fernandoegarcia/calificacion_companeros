<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    public $timestamps = False;
    protected $fillable = ['nombre', 'cargo','sexo', 'edad','fecha_nacimiento', 'usuario_id'];
}
