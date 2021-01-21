<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class LibController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articlesList')->with('article', $articles);
    }
    public function show($id)
    {
        $article = Article::with('chapter')->find($id)->toArray();
        return view('article')->with('article', $article);;
    }
}
