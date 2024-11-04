<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('application_settings', function (Blueprint $table) {
            // Add new columns including google_map_location
            $table->string('contact_address')->nullable()->after('id');
            $table->string('contact_email')->nullable()->after('contact_address');
            $table->string('contact_phone')->nullable()->after('contact_email');
            $table->string('social_facebook')->nullable()->after('contact_phone');
            $table->string('social_youtube')->nullable()->after('social_facebook');
            $table->string('social_instagram')->nullable()->after('social_youtube');
            $table->string('social_tiktok')->nullable()->after('social_instagram');
            $table->string('google_map_location')->nullable()->after('social_tiktok'); // Add this line for the map link
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_settings', function (Blueprint $table) {
            // Drop the columns if they exist
            $table->dropColumn('contact_address');
            $table->dropColumn('contact_email');
            $table->dropColumn('contact_phone');
            $table->dropColumn('social_facebook');
            $table->dropColumn('social_youtube');
            $table->dropColumn('social_instagram');
            $table->dropColumn('social_tiktok');
            $table->dropColumn('google_map_location'); // Drop the map link column
        });
    }
};
