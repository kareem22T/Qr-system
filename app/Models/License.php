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
        'instrument_n',
        'instrument_e',
        'instrument_w',
        'instrument_s',
        'instrument_height_n',
        'instrument_height_e',
        'instrument_height_w',
        'instrument_height_s',
        'nature_n',
        'nature_e',
        'nature_w',
        'nature_s',
        'nature_height_n',
        'nature_height_e',
        'nature_height_w',
        'nature_height_s',
        'prominence_n',
        'prominence_e',
        'prominence_w',
        'prominence_s',
        'bouncing_n',
        'bouncing_e',
        'bouncing_w',
        'bouncing_s',
        'nature_height_detailed_n',
        'nature_height_detailed_e',
        'nature_height_detailed_w',
        'nature_height_detailed_s',
        'instrument_height_detailed_n',
        'instrument_height_detailed_e',
        'instrument_height_detailed_w',
        'instrument_height_detailed_s',
        'survey_report_number',
        'survey_report_date',
        'land_num',
        'land_distance_according_to_planing',
        'land_use',
        'honesty',
        'municipal',
        'district',
        'planned_no',
        'block_no',
        'east_coordinate',
        'north_coordinate',
        'order_number',
        'office_design',
        'office',
        'qr_code',
    ];

    /**
     * Get all of the owners for the License
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owners()
    {
        return $this->hasMany(Owner::class, 'license_id', 'id');
    }

    /**
     * Get all of the docs for the License
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docs()
    {
        return $this->hasMany(Doc::class, 'license_id', 'id');
    }
    public function coordinates()
    {
        return $this->hasMany(Coordinate::class, 'license_id', 'id');
    }
}
