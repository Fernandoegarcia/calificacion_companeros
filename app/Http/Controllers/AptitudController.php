<?php

namespace App\Http\Controllers;

use App\Models\Aptitud;
use Illuminate\Http\Request;


class AptitudController extends Controller
{
    public function index(){

        return Aptitud::all();
    }

    public function store(Request $request, Aptitud $aptitud)  {

        $validaciones = $request->validate([

            'aptitudes'=>['required']
        ]);

        $aptitud= new Aptitud();

        $aptitud->fill(
            $request->only('aptitudes')
        );

        $aptitud->save();

        return $aptitud;
    }

    public function update(Request $request, Aptitud $aptitud){

        $aptitud->update(
            $request->only('aptitudes')
        );

        return $aptitud;
    }

}
