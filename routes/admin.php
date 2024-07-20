<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\GuestAdminMiddleware;

Route::prefix('admin')->group(function () {
    Route::post("login", [AuthController::class, "login"])->name("admin.login.post");
    Route::get("login", [AuthController::class, "index"]);

    Route::middleware(['auth:admin'])->group(function () {
        // Dashboard
        Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");
        Route::get("/lisence/edit/{id}", [DashboardController::class, "edit"])->name("admin.edit");
        Route::get("/lisence/delete/{id}", [DashboardController::class, "delete"])->name("admin.delete");
    });
});
