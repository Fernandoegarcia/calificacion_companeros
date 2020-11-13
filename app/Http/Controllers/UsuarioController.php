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
            'user_name'=>['required','unique:App\Models\Usuario,user_name'],
            'email' => ['required','email','unique:App\Models\Usuario,email'],
            'password' => ['required','string','min:8'],

        ]);



        $usuario = new Usuario();

        $usuario->fill(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad', 'password', 'user_name', 'email')
        );

        $usuario->save();

        return $usuario;

        $usuario->atach('aptitud_id');

        $usuario->atach('');
    }

    public function update(Request $request)
    {
        $validaciones = $request->validate([
            'nombre'=>['required'],
            'cargo'=>['required'],
            'fecha_nacimiento'=>['required', 'date'],
            'user_name'=>['required','unique:App\Models\Usuario,user_name'],
            'email' => ['required','email','unique:App\Models\Usuario,email'],
            'password' => ['required','string','min:8'],
            'aptitudes'=>['required', 'array', 'min:1'],
            'aptitudes.*'=>['numeric', 'exists:aptitudes,id']

        ]);

        $usuario = $request->user();

        $usuario->update(
            $request->merge(['tipo'=>'empleado'])->only('nombre', 'cargo', 'tipo', 'fecha_nacimiento','compañia','sexo', 'edad')
        );

        $usuario->aptitudes()->sync((array)$request->get('aptitudes'));

        return $usuario;


    }

    public function delete(Request $request)
    {

        $usuario = $request->user();

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

        return $user->createToken($request->email)->plainTextToken;

    }



}
