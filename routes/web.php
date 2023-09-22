<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;

// Authentication
Route::get("login", [AuthController::class, "login"])->name("login");
Route::get("register", [AuthController::class, "register"])->name("register");
Route::get("changePassword", [AuthController::class, "changePassword"])->name("changePassword");
Route::post("login", [AuthController::class, "loginProcess"])->name("login.process");
Route::post("register", [AuthController::class, "registerProcess"])->name("register.process");
Route::post("changePassword", [AuthController::class, "changePasswordProcess"])->name("changePassword.process");
Route::get("logout", [AuthController::class, "logout"])->name("logout");

// Get
Route::get("/", DashboardController::class)->name("dashboard")->middleware(["auth"]);
Route::get("activity_log", ActivityLogController::class)->name("activity_log")->middleware(["auth"]);

// CRUD
Route::resource("role", RoleController::class)->middleware(["auth", "is_admin"]);
