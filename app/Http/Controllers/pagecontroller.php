<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function selamat datang() {
    return 'Selamat Datang';
    }
}

Route::get(‘/about’, function () {
    return 'Nama : Priesca Leylya Syafitri';
    return 'Nim : 2031710176';
   });
 
Route::get('/articles/1', function () {
    echo('halaman artikel dengan id 1');
});

Route::get('/articles/2', function () {
    echo('halaman artikel dengan id 2');
});  
   