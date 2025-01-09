<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDashboardImage extends Model
{
    use HasFactory;

    protected $table = 'user_image_dashboards';

    protected $fillable = [
        'name',
        'image',
        'description',
    ];
}
