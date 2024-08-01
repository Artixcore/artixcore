<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'menu_id', 'submenu', 'submenu_link', 'submenu_image'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function subSubMenus()
    {
        return $this->hasMany(Sub__subMenu::class);
    }
}
