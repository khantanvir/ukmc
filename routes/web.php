<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Setting\SettingController;


//Auth::routes();
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('user-list', 'user_list');
});
Route::controller(TaskController::class)->group(function () {
    Route::get('task-create', 'create');
    Route::get('task-list', 'all');
    Route::get('my-tasks', 'my_tasks');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('company-settings', 'company_settings');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('profile-settings', 'profile_settings');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('login', 'login');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('edit_profile', 'edit_profile');
});
