<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_id',
        'type',
        'num',
        'date',
    ];

    public $timestamps = false;

}
