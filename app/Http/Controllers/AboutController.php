<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function selamat datang() {
        return 'Selamat Datang';
        }
}

Route::get(‘/about’, function () {
    return 'Nama : Priesca Leylya Syafitri';
    <br>
    return 'Nim : 2031710176';
   });
 