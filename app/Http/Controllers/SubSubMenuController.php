<?php

namespace App\Http\Controllers;

use App\Models\Sub__subMenu;
use App\Models\Sub_Menu;
use Illuminate\Http\Request;

class SubSubMenuController extends Controller
{
    public function index()
    {
        $subSubMenus = Sub__subMenu::all();
        return view('sub_sub_menus.index', compact('subSubMenus'));
    }

    public function create()
    {
        $subMenus = Sub_Menu::all();
        return view('sub_sub_menus.create', compact('subMenus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'submenu_id' => 'required',
            'subsubmenu' => 'required',
            'subsubmenu_link' => 'required',
            'subsubmenu_image' => 'required|image'
        ]);

        $subSubMenu = new Sub__subMenu($request->all());
        if ($request->hasFile('subsubmenu_image')) {
            $subSubMenu->subsubmenu_image = $request->file('subsubmenu_image')->store('subsubmenu_images');
        }
        $subSubMenu->save();

        return redirect()->route('sub_sub_menus.index');
    }

    public function show(Sub__subMenu $subSubMenu)
    {
        return view('sub_sub_menus.show', compact('subSubMenu'));
    }

    public function edit(Sub__subMenu $subSubMenu)
    {
        $subMenus = Sub_Menu::all();
        return view('sub_sub_menus.edit', compact('subSubMenu', 'subMenus'));
    }

    public function update(Request $request, Sub__subMenu $subSubMenu)
    {
        $request->validate([
            'submenu_id' => 'required',
            'subsubmenu' => 'required',
            'subsubmenu_link' => 'required',
            'subsubmenu_image' => 'image'
        ]);

        $subSubMenu->fill($request->all());
        if ($request->hasFile('subsubmenu_image')) {
            $subSubMenu->subsubmenu_image = $request->file('subsubmenu_image')->store('subsubmenu_images');
        }
        $subSubMenu->save();

        return redirect()->route('sub_sub_menus.index');
    }

    public function destroy(Sub__subMenu $subSubMenu)
    {
        $subSubMenu->delete();
        return redirect()->route('sub_sub_menus.index');
    }
}
