<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Our_Goal;
use App\Models\Our_Mission;
use App\Models\Service;

class HomeController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function hero()
    {
        $heros = Hero::latest();
        $clients = Client::paginate(5);
        $goals = Our_Goal::latest();
        $missions = Our_Mission::latest();
        $services = Service::paginate(8);
        return view('frontend.Home.hero', compact(
            'heros',
            // ''
        ));
    }



}
