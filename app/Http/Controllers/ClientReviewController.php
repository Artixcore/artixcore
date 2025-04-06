<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'review'   => 'required|string',
            'image'    => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $originalName = Str::slug(pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME));
            $extension = $request->image->getClientOriginalExtension();
            $fileName = $originalName . '.' . $extension;

            // Save to storage/app/client_reviews
            $path = $request->file('image')->storeAs('client_reviews', $fileName, 'public');
            $validated['image'] = $path;
        }

        ClientReview::create($validated);

        return redirect()->route('client-reviews.index')->with('success', 'Review added successfully.');
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
