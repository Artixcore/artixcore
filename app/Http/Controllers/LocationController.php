<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function countries()
    {
        $path = public_path('countries.json');
        $countries = json_decode(File::get($path), true);
        return response()->json($countries);
    }

    public function states($country_id)
    {
        $path = public_path('states.json');
        $states = json_decode(File::get($path), true);
        $filteredStates = array_filter($states, function($state) use ($country_id) {
            return $state['country_id'] == $country_id;
        });
        return response()->json($filteredStates);
    }

    public function cities($state_id)
    {
        $path = public_path('cities.json');
        $cities = json_decode(File::get($path), true);
        $filteredCities = array_filter($cities, function($city) use ($state_id) {
            return $city['state_id'] == $state_id;
        });
        return response()->json($filteredCities);
    }
}
