<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobikuController extends Controller
{
    public function index(){
        return view('hobiku');
    }
}
