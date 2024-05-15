<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home Page";
        return view('home', compact('title'));
    }

    public function profil()
    {
        $nama = "Astri yohana sidauruk";
        $npm = 218160034;
        $umur = 17;
        $statusPendidikan = "S1";
        $jurusan = "Teknik Informatika";
        return view('profil', compact('title'));

    }
}
