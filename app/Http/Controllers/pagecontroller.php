<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function selamat datang() {
    return 'Selamat Datang';
    }

    public  function about() {
        return 'Nama : PRIESCA LEYLYA SYAFITRI <br> Nim : 2031710176';
    }

    public  function articles() {
        return 'Halaman Artikel dengan Id '$id'';
    }
}
