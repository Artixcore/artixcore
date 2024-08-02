<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Sub_Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'menu_type' => 'required',
            'menu_image' => 'required|image',
            'status' => 'required'
        ]);

        $menu = new Menu();
        $menu->user_id = Auth::user()->id;
        $menu->menu = $request->menu;
        $menu->menu_type = $request->menu_type;
        $menu->menu_link = $request->menu_link;
        $menu->status = $request->status;
        if ($request->hasFile('menu_image')) {
            $originalName = $request->file('menu_image')->getClientOriginalName();
            $menuimage = $request->file('menu_image')->storeAs('menu_images', $originalName, 'public');
        }
        $menu->menu_image = $menuimage;
        $menu->save();

        return redirect()->route('menus.index');
    }

    public function show(Menu $menu)
    {
        $subMenus = Sub_Menu::where('menu_id', $menu->id)->get();
        return view('menus.sub_menus.index', compact('menu', 'subMenus'));
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
            'menu_type' => 'required',
            'menu_image' => 'image',
            'status' => 'required'
        ]);

        $menu->user_id = Auth::user()->id;
        $menu->menu = $request->menu;
        $menu->menu_type = $request->menu_type;
        $menu->menu_link = $request->menu_link;
        $menu->status = $request->status;
        if ($request->hasFile('menu_image')) {
            $originalName = $request->file('menu_image')->getClientOriginalName();
            $menuimage = $request->file('menu_image')->storeAs('menu_images', $originalName, 'public');
        }
        $menu->menu_image = $menuimage;
        $menu->save();

        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}
