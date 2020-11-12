<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([

        'email' => 'required|email',
        'password' => 'required|string',
        // 'name' => 'required',

        ]);
    
            $resultado='Logged';
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages
            ([
                'email' => ['email o password incorrecto'],
            ]);
        }else {
            echo $resultado;
        }

        return $user->createToken($request->email)->plainTextToken;
        //return $resultado;
        // if ($user && Hash::check($request->password, $user->password)) {
        //     echo 'Logged!';
        // }else 
        // {
        //     echo'error en email or password';
        // }
        
        // return $user;
    }
}
