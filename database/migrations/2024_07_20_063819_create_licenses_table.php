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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('national_license_no')->nullable();
            $table->string('license_no')->nullable();
            $table->string('occupancy_certificate_number')->nullable();
            $table->string('license_starting_date')->nullable();
            $table->string('license_ending_date')->nullable();
            $table->string('license_type')->nullable();
            $table->string('building_type')->nullable();
            $table->integer('buildings_num')->nullable();
            $table->string('does_license_related_to_another')->nullable();
            $table->string('main_use')->nullable();
            $table->string('secondary_use')->nullable();
            $table->string('building_distance')->nullable();
            $table->string('land_distance')->nullable();
            $table->string('building_desc')->nullable();
            $table->string('instrument_n')->nullable();
            $table->string('instrument_e')->nullable();
            $table->string('instrument_w')->nullable();
            $table->string('instrument_s')->nullable();
            $table->string('instrument_height_n')->nullable();
            $table->string('instrument_height_e')->nullable();
            $table->string('instrument_height_w')->nullable();
            $table->string('instrument_height_s')->nullable();
            $table->string('nature_n')->nullable();
            $table->string('nature_e')->nullable();
            $table->string('nature_w')->nullable();
            $table->string('nature_s')->nullable();
            $table->string('nature_height_n')->nullable();
            $table->string('nature_height_e')->nullable();
            $table->string('nature_height_w')->nullable();
            $table->string('nature_height_s')->nullable();
            $table->string('prominence_n')->nullable();
            $table->string('prominence_e')->nullable();
            $table->string('prominence_w')->nullable();
            $table->string('prominence_s')->nullable();
            $table->string('bouncing_n')->nullable();
            $table->string('bouncing_e')->nullable();
            $table->string('bouncing_w')->nullable();
            $table->string('bouncing_s')->nullable();
            $table->string('nature_height_detailed_n')->nullable();
            $table->string('nature_height_detailed_e')->nullable();
            $table->string('nature_height_detailed_w')->nullable();
            $table->string('nature_height_detailed_s')->nullable();
            $table->string('instrument_height_detailed_n')->nullable();
            $table->string('instrument_height_detailed_e')->nullable();
            $table->string('instrument_height_detailed_w')->nullable();
            $table->string('instrument_height_detailed_s')->nullable();
            $table->string('survey_report_number')->nullable();
            $table->string('survey_report_date')->nullable();
            $table->string('land_use')->nullable();
            $table->string('land_num')->nullable();
            $table->string('land_distance_according_to_planing')->nullable();
            $table->string('honesty')->nullable();
            $table->string('municipal')->nullable();
            $table->string('district')->nullable();
            $table->string('planned_no')->nullable();
            $table->string('block_no')->nullable();
            $table->string('east_coordinate')->nullable();
            $table->string('north_coordinate')->nullable();
            $table->string('order_number')->nullable();
            $table->text('qr_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('license');
    }
};
