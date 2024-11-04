<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'email',
        'address',
        'google_map_location',
        'facebook',
        'tiktok',
        'instagram',
        'youtube',
    ];
}
