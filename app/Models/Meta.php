<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'page', 'product', 'blog', 'article', 'case_study', 'meta_title', 'meta_desc', 'meta_keywords', 'scripts'
    ];
}
