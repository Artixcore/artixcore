<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'service_name', 'service_short_desc', 'service_icon', 'service_image', 'article_number',
    ];

}
