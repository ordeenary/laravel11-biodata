<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profilee');
    }
    public function tampil(){
        return "ini adalah teks dari fungsi tampil()";
    }
    public function edit(){
        return "ini adalah teks dari fungsi edit()";
    }
    public function tambah(){
        return view ('tambah');
    }
    public function hapus(){
        return "ini adalah teks dari fungsi hapus()";
    }
    public function lihat(){
        return view ('lihat');
    }

}
