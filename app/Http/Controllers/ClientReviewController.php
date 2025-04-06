<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function index()
    {
        $clientReviews = ClientReview::latest()->get();
        return view('admin.client_reviews.index', compact('clientReviews'));
    }

    public function create()
    {
        return view('admin.client_reviews.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'nullable',
            'review' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('client_reviews', 'public');
        }

        ClientReview::create($data);

        return redirect()->route('client-reviews.index')->with('success', 'Review added');
    }

    public function edit(ClientReview $clientReview)
    {
        return view('admin.client_reviews.edit', ['review' => $clientReview]);
    }

    public function update(Request $request, ClientReview $clientReview)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'nullable',
            'review' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('client_reviews', 'public');
        }

        $clientReview->update($data);

        return redirect()->route('client-reviews.index')->with('success', 'Review updated');
    }

    public function destroy(ClientReview $clientReview)
    {
        $clientReview->delete();
        return redirect()->route('client-reviews.index')->with('success', 'Review deleted');
    }

}
