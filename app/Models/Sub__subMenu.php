<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub__subMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'submenu_id', 'subsubmenu', 'subsubmenu_link', 'subsubmenu_image'
    ];

    public function subMenu()
    {
        return $this->belongsTo(Sub_Menu::class);
    }
}
