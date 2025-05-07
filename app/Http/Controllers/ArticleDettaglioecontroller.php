<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

// class ArticleDettaglioecontroller extends Controller
// {
//     public function show (string $id){
//         $article= Article::findorfail($id);

//         return view('details.dettagli',compact('article'));
//     }
// }
class ArticleDettaglioecontroller extends Controller
{
    public function show (Article $article){
        return view('details.dettagli',compact('article'));
    }
}
