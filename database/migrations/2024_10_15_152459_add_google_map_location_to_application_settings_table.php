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
            // Add the google_map_location column
            $table->string('google_map_location')->nullable(); // Use nullable if it's not required
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_settings', function (Blueprint $table) {
            // Remove the google_map_location column if the migration is rolled back
            $table->dropColumn('google_map_location');
        });
    }
};
