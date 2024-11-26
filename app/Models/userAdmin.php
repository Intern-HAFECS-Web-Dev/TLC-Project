<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userAdmin extends Model
{
    use HasFactory;

    protected $table = 'user_admins';

    // Fields that can be mass-assigned
    protected $fillable = [
        'profile_image'
    ];

    // Define relationship to User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
