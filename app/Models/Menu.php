<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'menu', 'menu_link', 'menu_image', 'status'
    ];

    public function subMenus()
    {
        return $this->hasMany(Sub_Menu::class);
    }

}
