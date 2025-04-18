<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }




































    public function homecards(){
        $articles = Article::take(6)->orderBy('created_at' , 'desc')->get();
        return view('welcome', compact('articles'));
    }

    public function index(){
        $articles = Article::orderBy('created_at' , 'desc')->paginate(6);  // da mettere nell' article controller
        return view('article.index' , compact('articles'));
    }


}


































