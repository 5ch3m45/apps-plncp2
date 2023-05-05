<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    AdminController,
    Cj70Controller,
    KartuPdpController,
    Lampiran2f3Controller,
    MaterialController,
    MonitoringPdpController,
    MonitoringPfkController,
    ProfileController,
    SubMonitoringPfkController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('lupa-password', [AuthController::class, 'forgotPassword'])->middleware('guest')->name('forgot-password');

Route::get('generate-user', [AuthController::class, 'generateUserDummy']);

Route::middleware(['auth'])->group(function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('', [AdminController::class, 'index'])->name('index');
        Route::get('create', [AdminController::class, 'create']);
        Route::post('create', [AdminController::class, 'store']);
        Route::get('show/{user}', [AdminController::class, 'show'])->name('show');
        Route::get('edit/{user}', [AdminController::class, 'edit']);
        Route::post('edit/{user}', [AdminController::class, 'update']);
        Route::delete('delete/{user}', [AdminController::class, 'destroy']);
    });

    Route::group(['prefix' => 'cj70', 'as' => 'cj70.'], function() {
        Route::get('', [Cj70Controller::class, 'index'])->name('index');
        Route::get('create', [Cj70Controller::class, 'create'])->name('create');
        Route::post('create', [Cj70Controller::class, 'store'])->name('store');
        Route::get('show/{id}', [Cj70Controller::class, 'show'])->name('show');
        Route::get('edit/{id}', [Cj70Controller::class, 'edit'])->name('edit');
        Route::post('update/{id}', [Cj70Controller::class, 'update'])->name('update');
        Route::delete('delete/{id}', [Cj70Controller::class, 'destroy'])->name('destroy');
        Route::get('delete/material/{id}', [Cj70Controller::class, 'destroy_cj70_material'])->name('destroy.material');
        Route::post('import', [Cj70Controller::class, 'import'])->name('import');
        Route::get('material', [Cj70Controller::class, 'get_material'])->name('material');
    });

    Route::group(['prefix' => 'kartu-pdp', 'as' => 'kartu-pdp.'], function() {
        Route::get('', [KartuPdpController::class, 'index'])->name('index');
        Route::get('create', [KartuPdpController::class, 'create'])->name('create');
        Route::post('create', [KartuPdpController::class, 'store'])->name('store');
        Route::get('show/{id}', [KartuPdpController::class, 'show'])->name('show');
        Route::get('edit/{id}', [KartuPdpController::class, 'edit'])->name('edit');
        Route::get('archive/{id}', [KartuPdpController::class, 'archive'])->name('archive');
        Route::post('update/{id}', [KartuPdpController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [KartuPdpController::class, 'destroy'])->name('destroy');
    });

    Route::get('lampiran-2f3', [Lampiran2f3Controller::class, 'index']);
    Route::get('lampiran-2f3/create', [Lampiran2f3Controller::class, 'create']);
    Route::post('lampiran-2f3/create', [Lampiran2f3Controller::class, 'store']);
    Route::get('lampiran-2f3/show/{id}', [Lampiran2f3Controller::class, 'show']);
    Route::get('lampiran-2f3/edit/{id}', [Lampiran2f3Controller::class, 'edit']);
    Route::post('lampiran-2f3/edit/{id}', [Lampiran2f3Controller::class, 'update']);
    Route::delete('lampiran-2f3/delete/{id}', [Lampiran2f3Controller::class, 'destroy']);

    Route::get('material', [MaterialController::class, 'index'])->name('material.index');
    Route::post('material/import', [MaterialController::class, 'import'])->name('material.import');

    Route::get('monitoring-pdp', [MonitoringPdpController::class, 'index'])->name('monitoring-pdp.index');
    Route::get('monitoring-pdp/show/{id}', [MonitoringPdpController::class, 'show']);
    Route::get('monitoring-pdp/edit/{id}', [MonitoringPdpController::class, 'edit']);
    Route::post('monitoring-pdp/edit/{id}', [MonitoringPdpController::class, 'update']);

    Route::get('monitoring-pfk', [MonitoringPfkController::class, 'index']);
    Route::get('monitoring-pfk/create', [MonitoringPfkController::class, 'create']);
    Route::post('monitoring-pfk/create', [MonitoringPfkController::class, 'store']);
    Route::get('monitoring-pfk/show/{id}', [MonitoringPfkController::class, 'show']);
    Route::get('monitoring-pfk/edit/{id}', [MonitoringPfkController::class, 'edit']);
    Route::post('monitoring-pfk/edit/{id}', [MonitoringPfkController::class, 'update']);
    Route::delete('monitoring-pfk/delete/{id}', [MonitoringPfkController::class, 'destroy']);

    Route::get('monitoring-pfk/show/{id}/sub/{sub_id}', [SubMonitoringPfkController::class, 'show']);

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function() {
        Route::get('', [ProfileController::class, 'index'])->name('index');
        Route::post('', [ProfileController::class, 'update'])->name('update');
        Route::post('password', [ProfileController::class, 'password'])->name('password');
        Route::post('photo', [ProfileController::class, 'photo'])->name('photo');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});