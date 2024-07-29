<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function index(){
        return view('admin.article.index');
    }

    public function new(){
        return view('admin.article.New.create');
    }
}
