<?php

namespace App\Http\Controllers;

use App\Models\Sub__subMenu;
use App\Models\Sub_Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubSubMenuController extends Controller
{
    public function index()
    {
        $subSubMenus = Sub__subMenu::all();
        return view('menus.sub_sub_menus.index', compact('subSubMenus'));
    }

    public function create()
    {
        $subMenus = Sub_Menu::all();
        return view('menus.sub_sub_menus.create', compact('subMenus'));
    }

    public function store(Request $request)
    {

        // if ($request->hasFile('subsubmenu_image')) {

        //     $originalName = $request->file('subsubmenu_image')->getClientOriginalName();
        //     $subsubmenu_image = $request->file('subsubmenu_image')->storeAs('subsubmenu_image', $originalName, 'public');
        // }

        $subsubmenu = new Sub__subMenu();
        $subsubmenu->user_id = Auth::user()->id;
        $subsubmenu->submenu_id = $request->submenu_id;
        $subsubmenu->subsubmenu = $request->subsubmenu;
        $subsubmenu->subsubmenu_link = $request->subsubmenu_link;
        // $subsubmenu->subsubmenu_image = $subsubmenu_image;
        $subsubmenu->save();

        return redirect()->back();
    }

    public function show(Sub__subMenu $subSubMenu)
    {
        $subSubMenu = Sub_Menu::where('menu_id', $subSubMenu->id)->get();
        return view('menus.sub_sub_menus.show', compact('subSubMenu'));
    }

    public function edit(Sub__subMenu $subSubMenu)
    {
        $subMenus = Sub_Menu::all();
        return view('menus.sub_sub_menus.edit', compact('subSubMenu', 'subMenus'));
    }

    public function update(Request $request, Sub__subMenu $subSubMenu)
    {
        $request->validate([
            'submenu_id' => 'required',
            'subsubmenu' => 'required',
            'subsubmenu_link' => 'required',
        ]);

        $subSubMenu->$request->all()->save();

        return redirect()->route('sub_sub_menus.index');
    }

    public function destroy(Sub__subMenu $subSubMenu)
    {
        $subSubMenu->delete();
        return redirect()->route('sub_sub_menus.index');
    }
}
