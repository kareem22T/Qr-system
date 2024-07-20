<?php

use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;

include('admin.php');

Route::get('/', function () {
    return view('licenses.create');
});
Route::resource('licenses', LicenseController::class);
Route::get('/licenses/download/{id}', [LicenseController::class, "download"]);
