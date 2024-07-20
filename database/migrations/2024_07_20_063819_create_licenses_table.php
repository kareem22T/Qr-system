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
            $table->date('license_starting_date')->nullable();
            $table->date('license_ending_date')->nullable();
            $table->string('license_type')->nullable();
            $table->string('building_type')->nullable();
            $table->integer('buildings_num')->nullable();
            $table->string('does_license_related_to_another')->nullable();
            $table->string('main_use')->nullable();
            $table->string('secondary_use')->nullable();
            $table->string('building_distance')->nullable();
            $table->string('land_distance')->nullable();
            $table->string('building_desc')->nullable();
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
