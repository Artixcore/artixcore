<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Our_Goal;
use App\Models\Our_Mission;
use App\Models\Service;
class IndexPageController extends Controller
{
    public function index(){
        $heroArticles = Article::where('page_article', 'hero')->get();

        return view('frontend.Home.hero', compact('heroArticles'));
    }
}
