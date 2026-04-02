<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $articles = json_decode(file_get_contents(public_path().'/articles.json'));
        return view('components/home', ['articles' => $articles]);
    }

    public function show($full_image){
        return view('components/galery', ['image' => $full_image]);
    }
}
