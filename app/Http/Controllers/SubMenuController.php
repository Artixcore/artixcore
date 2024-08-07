<?php

namespace App\Http\Controllers;

use App\Models\Sub_Menu;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubMenuController extends Controller
{
    public function index()
    {
        $subMenus = Sub_Menu::all();
        return view('menus.sub_menus.index', compact('subMenus'));
    }

    public function create()
    {
        $menus = Menu::all();
        return view('menus.sub_menus.create', compact('menus'));
    }

    public function store(Request $request)
    {

        $menu = new Sub_Menu();
        $menu->user_id = Auth::user()->id;
        $menu->menu_id = $request->menu_id;
        $menu->submenu = $request->submenu;
        $menu->submenu_link = $request->submenu_link;
        // if ($request->hasFile('submenu_image')) {
        //     $originalName = $request->file('submenu_image')->getClientOriginalName();
        //     $submenu_image = $request->file('submenu_image')->storeAs('submenu_image', $originalName, 'public');
        // }
        // $menu->submenu_image = $submenu_image;
        $menu->save();


        $menu->save();

        return redirect()->back();
    }

    public function show(Sub_Menu $subMenu)
    {
        return view('menus.sub_sub_menus.index', compact('subMenu'));
    }

    public function edit(Sub_Menu $subMenu)
    {
        $menus = Menu::all();
        return view('menus.sub_menus.edit', compact('subMenu', 'menus'));
    }

    public function update(Request $request, Sub_Menu $subMenu)
    {
        $request->validate([
            'menu_id' => 'required',
            'submenu' => 'required',
            'submenu_link' => 'required',
            'submenu_image' => 'image'
        ]);

        $subMenu->fill($request->all());
        if ($request->hasFile('submenu_image')) {
            $subMenu->submenu_image = $request->file('submenu_image')->store('submenu_images');
        }
        $subMenu->save();

        return redirect()->back();
    }

    public function destroy(Sub_Menu $subMenu)
    {
        $subMenu->delete();
        return redirect()->back();
    }
}
