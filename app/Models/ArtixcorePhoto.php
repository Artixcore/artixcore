<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtixcorePhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'number', 'image_for', 'image_from', 'image_title', 'image_file'
    ];

    public function content()
    {
        return $this->hasOne(Article::class, 'image_id');
    }
}
