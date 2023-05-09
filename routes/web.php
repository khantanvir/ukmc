<?php

use App\Events\AddLeadEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Setting\SettingController;


//Auth::routes();
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('login', 'login');
    Route::get('reset-password', 'reset_password');
    Route::get('user-list', 'user_list');
});
Route::controller(TaskController::class)->group(function () {
    Route::get('task-create', 'create');
    Route::get('task-list', 'all');
    Route::get('my-tasks', 'my_tasks');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('company-settings', 'company_settings');
    Route::get('profile-settings', 'profile_settings');
    Route::get('edit_profile', 'edit_profile');
});

Route::get('test', function () {
    event(new AddLeadEvent('Mr Tanvir'));
    return "Event has been sent!";
});

