<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'title', 'content_type', 'primary_image_id', 'author_id', 'image_id',
        'video_id', 'content_url', 'subject', 'short_desc', 'content'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function primaryImage()
    {
        return $this->belongsTo(ArtixcorePhoto::class, 'primary_image_id');
    }

    public function image()
    {
        return $this->belongsTo(ArtixcorePhoto::class, 'image_id');
    }

    public function video()
    {
        return $this->belongsTo(ArtixcoreVideo::class, 'video_id');
    }
}
