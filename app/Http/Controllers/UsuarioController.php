<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
            'user_name'=>['required'],
            'email' => 'required|email',
            'password' => 'required|string',

        ]);




        $usuario = new Usuario();

        $usuario->fill(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad', 'password', 'user_name')
        );

        $usuario->save();

        return $usuario;

        $usuario->atach('aptitud_id');

        $usuario->atach('');
    }

    public function update(Request $request, Usuario $usuario)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
            'user_name'=>['required'],
            'password'=>['required'],
            'email' => 'required|email',

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

    public function index(Request $request){

        return  UsuarioResource::collection(Usuario::all());

    }


    public function login(Request $request){


        $resultado='Logged';
        $user = Usuario::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages
            ([
                'email' => ['email o password incorrecto'],
            ]);
        }else {
            echo $resultado;
        }

    }



}
