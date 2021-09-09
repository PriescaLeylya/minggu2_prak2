<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function selamat datang() {
        return 'Selamat Datang';
        }
}

Route::get('/articles/{$id}', function ($id){
    return 'articles'.$id;
});
   