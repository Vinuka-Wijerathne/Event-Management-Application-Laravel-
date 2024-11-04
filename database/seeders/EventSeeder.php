<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'slug' => 'avurudu-festival',
            'event' => 'Avurudu Festival',
            'event_date_from' => Carbon::createFromFormat('Y-m-d', '2024-10-17'),
            'event_date_to' => null,
            'venue' => 'Kandy',
            'description' => 'Join us for the traditional Avurudu Festival with food, music, and fun!',
            'cover_image_id' => null,
            'status' => 'active'
        ]);

        Event::create([
            'slug' => 'music-festival',
            'event' => 'Music Festival',
            'event_date_from' => Carbon::createFromFormat('Y-m-d', '2024-11-10'),
            'event_date_to' => Carbon::createFromFormat('Y-m-d', '2024-11-12'),
            'venue' => 'Colombo',
            'description' => 'Experience the best of local and international music at the Music Festival.',
            'cover_image_id' => null,
            'status' => 'active'
        ]);

        // Add more events as needed
    }
}
