<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'contacts';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
