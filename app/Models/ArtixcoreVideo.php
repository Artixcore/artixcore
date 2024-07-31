<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtixcoreVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'number', 'video_for', 'video_from', 'video_title', 'video_file'
    ];

    public function content()
    {
        return $this->hasOne(Article::class, 'video_id');
    }
}
