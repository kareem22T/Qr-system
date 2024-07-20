<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'national_license_no',
        'license_no',
        'occupancy_certificate_number',
        'license_starting_date',
        'license_ending_date',
        'license_type',
        'building_type',
        'buildings_num',
        'does_license_related_to_another',
        'main_use',
        'secondary_use',
        'building_distance',
        'land_distance',
        'building_desc',
    ];
}
