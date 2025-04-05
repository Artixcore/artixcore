<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mFAQ extends Model
{
    use HasFactory;
    // app/Models/Faq.php
    protected $fillable = ['question', 'answer'];
}
