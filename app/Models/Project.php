<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'user_id', 'project_name', 'project_type', 'project_admin_id',
        'project_other_users_id', 'project_start', 'project_end', 'project_client_id',
        'project_running', 'project_image', 'project_short_desc', 'project_desc', 'project_video'
    ];
}
