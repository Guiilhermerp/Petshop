<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Ducktype;

class OwnersController extends Controller
{

    public function owner(){
        $owners = \App\Owner::all();
        return view('owner', compact('owners'));
    }
}
