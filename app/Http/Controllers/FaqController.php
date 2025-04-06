<?php

namespace App\Http\Controllers;

use App\Models\mFAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $mFAQs = mFAQ::latest()->get();
        return view('admin.mFAQs.index', compact('mFAQs'));
    }

    public function create()
    {
        return view('admin.mFAQs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        mFAQ::create($request->only('question', 'answer'));

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function show(mFAQ $mFAQ)
    {
        return view('admin.mFAQs.show', compact('mFAQ'));
    }

    public function edit(mFAQ $mFAQ)
    {
        return view('admin.mFAQs.edit', compact('mFAQ'));
    }

    public function update(Request $request, mFAQ $mFAQ)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        $mFAQ->update($request->only('question', 'answer'));

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(mFAQ $faq)
    {
        $faq->delete();
        return redirect()->back()->with('success', 'FAQ deleted successfully.');
    }
}

