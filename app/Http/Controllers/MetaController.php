<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $metas = Meta::all();
        return view('Meta.Meta.index', compact('metas'));
    }

    public function create()
    {
        return view('Meta.Meta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'nullable|string',
            'product' => 'nullable|string',
            'blog' => 'nullable|string',
            'article' => 'nullable|string',
            'case_study' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_desc' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'scripts' => 'nullable|string',
        ]);

        $meta = new Meta();

        $meta->number = 'M' . uniqid();
        $meta->page = $request->page;
        $meta->product = $request->product;
        $meta->blog = $request->blog;
        $meta->article = $request->article;
        $meta->case_study = $request->case_study;
        $meta->meta_title = $request->meta_title;
        $meta->meta_desc = $request->meta_desc;
        $meta->meta_keywords = $request->meta_keywords;
        $meta->scripts = $request->scripts;
        $meta->save();

        return redirect()->back()->with('success', 'Meta created successfully.');
    }

    public function edit(Meta $meta)
    {
        return view('Meta.Meta.edit', compact('meta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page' => 'nullable|string',
            'product' => 'nullable|string',
            'blog' => 'nullable|string',
            'article' => 'nullable|string',
            'case_study' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_desc' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'scripts' => 'nullable|string',
        ]);

        $meta = Meta::find($id);

        $meta->page = $request->page;
        $meta->product = $request->product;
        $meta->blog = $request->blog;
        $meta->article = $request->article;
        $meta->case_study = $request->case_study;
        $meta->meta_title = $request->meta_title;
        $meta->meta_desc = $request->meta_desc;
        $meta->meta_keywords = $request->meta_keywords;
        $meta->scripts = $request->scripts;
        $meta->save();

        return redirect()->back()->with('success', 'Meta updated successfully.');
    }

    public function destroy($id)
    {
        $meta = Meta::find($id);
        $meta->delete();
        return redirect()->back()->with('success', 'Meta deleted successfully.');
    }
}
