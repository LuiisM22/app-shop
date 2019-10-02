<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControler extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
