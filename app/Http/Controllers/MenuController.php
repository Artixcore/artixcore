<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu' => 'required',
            'menu_link' => 'required',
            'menu_image' => 'required|image',
            'status' => 'required'
        ]);

        $menu = new Menu($request->all());
        if ($request->hasFile('menu_image')) {
            $menu->menu_image = $request->file('menu_image')->store('menu_images');
        }
        $menu->save();

        return redirect()->route('menus.index');
    }

    public function show(Menu $menu)
    {
        return view('menus.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'menu' => 'required',
            'menu_link' => 'required',
            'menu_image' => 'image',
            'status' => 'required'
        ]);

        $menu->fill($request->all());
        if ($request->hasFile('menu_image')) {
            $menu->menu_image = $request->file('menu_image')->store('menu_images');
        }
        $menu->save();

        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}
