<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
            'user_name'=>['required'],
            'password'=>['required']


        ]);


        $usuario = new Usuario();

        $usuario->fill(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad', 'password')
        );

        $usuario->save();

        return $usuario;

        $usuario->atach('aptitud_id');
    }

    public function update(Request $request, Usuario $usuario)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
        ]);


        $usuario->update(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad')
        );

        return $usuario;

    }

    public function delete(Usuario $usuario)
    {
        $usuario->delete();

    }

    public function index(){


        return  UsuarioResource::collection(Usuario::all());
    }
}
