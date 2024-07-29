<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Hero;
use App\Models\Our_Goal;
use App\Models\Our_Mission;
use App\Models\Service;
class IndexPageController extends Controller
{
    public function index(){
        $heros = Hero::latest();
        $clients = Client::paginate(5);
        $goals = Our_Goal::latest();
        $missions = Our_Mission::latest();
        $services = Service::paginate(8);
        return view('frontend.welcome', compact(
            'heros',
            'clients',
            'goals',
            'missions',
            'services',
            // ''
        ));
    }
}
