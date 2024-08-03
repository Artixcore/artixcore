<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'client_number', 'client_name', 'article_number', 'client_designation',
        'client_email', 'client_phone', 'client_company', 'client_city', 'client_state',
        'client_country', 'client_geoip', 'client_accuire_from', 'client_image', 'client_desc'
    ];
}
