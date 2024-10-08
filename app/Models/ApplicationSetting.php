<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_address',
        'contact_email',
        'contact_phone',
        'social_facebook',
        'social_youtube',
        'social_instagram',
        'social_tiktok',
    ];
}
