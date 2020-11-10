<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date']

        ]);

        #$usu= $request->input('usuario_id');
        #$usu->join('');

        $usuario = new Usuario();

        $usuario->fill(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad','usuario_id')
        );

        $usuario->save();

        return $usuario;
    }

    public function update(Request $request, Usuario $usuario)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
        ]);


        $usuario->update(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad','usuario_id')        );

        return $usuario;

    }

    public function delete(Usuario $usuario)
    {
        $usuario->delete();

        return $usuario;
    }

    public function index(){

        return(new Usuario())->paginate();

    }
}
