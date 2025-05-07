<?php

use App\Http\Controllers\ArticleDettaglioecontroller;
use App\Http\Controllers\Articlescontroller;
use App\Http\Controllers\Contattacicontroller;
use App\Http\Controllers\Homecontroller;
use App\View\Components\Herosection;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homecontroller::class,'home'])->name ('home');

Route::get('/articles.articoli', [Articlescontroller::class,'GetAllArticles'])->name ('Allarticles');

Route::get('/details/dettagli/{article}', [ArticleDettaglioecontroller::class,'show'])->name('paginadettaglio');

Route::get('/about.contattaci', [Contattacicontroller::class,'form'])->name('form');

// ROTTTA PER RACCOGLIERE I DATI PROVENIENTI DAL FORM DI CONTATTO
Route::post('/about.contattaci',[Contattacicontroller::class,'getDataAndSendEmail'])->name('data.send.email');
Route::get('/articles/create',[Articlescontroller::class,'CreateArticle'])->name('createArticle');
Route::post('articles/create',[Articlescontroller::class, 'store'])->name('articles.store');