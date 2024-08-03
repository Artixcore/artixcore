<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('crm.index', compact('clients'));
    }

    public function create()
    {
        return view('crm.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->user_id = Auth::id();
        $client->client_number = "Client" . uniqid();
        $client->client_name = $request->client_name;
        $client->client_designation = $request->client_designation;
        $client->client_email = $request->client_email;
        $client->client_phone = $request->client_phone;
        $client->client_company = $request->client_company;
        $client->client_city = $request->client_city;
        $client->client_state = $request->client_state;
        $client->client_country = $request->client_country;
        $client->client_geoip = $request->client_geoip;
        $client->client_accuire_from = $request->client_accuire_from;
        $client->client_desc = $request->client_desc;

        if ($request->hasFile('client_image')) {

            $originalName = $request->file('client_image')->getClientOriginalName();
            $client_image = $request->file('client_image')->storeAs('client_image', $originalName, 'public');
        }
        $client->client_image = $client_image;
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function show(Client $client)
    {
        return view('crm.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('crm.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {

        $client = Client::find($id);

        $client->user_id = Auth::id();
        $client->client_number = "Client" . uniqid();
        $client->client_name = $request->client_name;
        $client->client_designation = $request->client_designation;
        $client->client_email = $request->client_email;
        $client->client_phone = $request->client_phone;
        $client->client_company = $request->client_company;
        $client->client_city = $request->client_city;
        $client->client_state = $request->client_state;
        $client->client_country = $request->client_country;
        $client->client_geoip = $request->client_geoip;
        $client->client_accuire_from = $request->client_accuire_from;
        $client->client_desc = $request->client_desc;

        if ($request->hasFile('client_image')) {

            $originalName = $request->file('client_image')->getClientOriginalName();
            $client_image = $request->file('client_image')->storeAs('client_image', $originalName, 'public');
        }
        $client->client_image = $client_image;
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        if ($client->client_image) {
            Storage::disk('public')->delete($client->client_image);
        }
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
