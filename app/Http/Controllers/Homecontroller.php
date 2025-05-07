<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home(){
        $articles = Article::take(3)->get();

        
        return view ('home.home', compact('articles'));
    }
}
