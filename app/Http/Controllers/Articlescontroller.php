<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class Articlescontroller extends Controller
{

    protected $articles;
    public function __construct()
    {
        $this->articles = Article::all();
    }

    public function GetAllArticles(){
        return view('articles.articoli', ['articles' => $this->articles ]);
    }
    
    public function CreateArticle(){
        // $newArticle= new Article();
        // $newArticle->titolo= "il mio primo articolo";
        // $newArticle->data= "2025-04-28";
        // $newArticle->introduzione= "introduzione il mio primo articolo";
        // $newArticle->contenuto= "contenuto del mio primo articolo";
        // $newArticle->autore= "autore del mio primo articolo";
        // $newArticle->save();


        return view('articles.create') ;
        
    }
    public function store(ArticleRequest $request){
        // dd ($request->all());
        // $a= new Article();
        // $a->titolo= $request->article_title;
        // $a->data= $request->article_data;
        // $a->introduzione= $request->article_intro;
        // $a->contenuto= $request->article_content;
        // $a->autore= $request->article_autore;

        // $a->save();
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $ext = $request->file('image')->extension();
            $filename = uniqid() . "." . $ext;
            $path = $request->file('image')->storeAs('images', $filename, 'public');
            $url = Storage::url($path);
            $newArticle = Article::create($request->all());
            $newArticle->image = $url;
            $newArticle->save();
            
            
        }
        return redirect()->back()->with('success', 'Articolo creato con successo!');
    }
    
}
