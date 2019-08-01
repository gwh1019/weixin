<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuoController extends Controller
{
    //
    public function guo(Request $request)
    {
        dd($request->all());
    }
}
