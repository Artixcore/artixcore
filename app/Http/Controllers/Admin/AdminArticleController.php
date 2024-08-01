<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $articles = Article::with('author', 'primaryImage', 'image', 'video')->get();
        return view('admin.article.index', compact('articles'));
    }

    public function new(){
        return view('admin.article.New.create');
    }

    public function show($id)
    {
        $article = Article::with('image', 'video')->findOrFail($id);
        return view('admin.article.New.show', compact('article'));
    }


}
