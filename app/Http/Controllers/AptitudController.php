<?php

namespace App\Http\Controllers;

use App\Models\Apitud;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ApitudController extends Controller
{

    public function store(Request $request){

        $validaciones=$request->validate([

            'aptitudes'=>['required']
        ]);

        $aptitud = new Apitud();

        $aptitud->fill(
            $request->only('aptitudes')
        );

        $aptitud->save();

        return $aptitud;
    }


}
