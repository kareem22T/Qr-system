<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_id',
        'id_type',
        'id_num',
        'name',
    ];

    public $timestamps = false;
}
