<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'event',
        'event_date_from',
        'event_date_to',
        'venue',
        'description',
        'cover_image_id',
        'status'
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}
