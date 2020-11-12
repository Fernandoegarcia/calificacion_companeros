<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/usuario/registrar', [UsuarioController::class, 'store' ]);
Route::get('/usuario/main', [UsuarioController::class, 'index']);
Route::put('/usuario/actualizar', [UsuarioController::class, 'update' ]);
Route::delete('/usuario/eliminar', [UsuarioController::class, 'delete' ]);

Route :: group ( [ 'middleware'  =>  'auth:sanctum' ] ,  function ( ) { 
    
    
} ) ;
Route :: post ( "User/login" , [ UserController::class , 'index' ] ) ;