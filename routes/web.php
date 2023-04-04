<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    AdminController,
    Cj70Controller,
    KartuPdpController,
    Lampiran2f3Controller,
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


Route::get('login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::middleware([/* 'auth' */ 'guest'])->group(function() {
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('admin/create', [AdminController::class, 'create']);
    Route::post('admin/create', [AdminController::class, 'store']);
    Route::get('admin/show/{id}', [AdminController::class, 'show']);
    Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/edit/{id}', [AdminController::class, 'update']);
    Route::delete('admin/delete/{id}', [AdminController::class, 'destroy']);

    Route::get('cj70', [Cj70Controller::class, 'index'])->name('cj70.index');
    Route::get('cj70/create', [Cj70Controller::class, 'create']);
    Route::post('cj70/create', [Cj70Controller::class, 'store']);
    Route::get('cj70/show/{id}', [Cj70Controller::class, 'show']);
    Route::get('cj70/edit/{id}', [Cj70Controller::class, 'edit']);
    Route::post('cj70/edit/{id}', [Cj70Controller::class, 'update']);
    Route::delete('cj70/delete/{id}', [Cj70Controller::class, 'destroy']);
    Route::post('cj70/import', [Cj70Controller::class, 'import'])->name('cj70.import');

    Route::get('kartu-pdp', [KartuPdpController::class, 'index']);
    Route::get('kartu-pdp/create', [KartuPdpController::class, 'create']);
    Route::post('kartu-pdp/create', [KartuPdpController::class, 'store']);
    Route::get('kartu-pdp/show/{id}', [KartuPdpController::class, 'show']);
    Route::get('kartu-pdp/edit/{id}', [KartuPdpController::class, 'edit']);
    Route::post('kartu-pdp/edit/{id}', [KartuPdpController::class, 'update']);
    Route::delete('kartu-pdp/delete/{id}', [KartuPdpController::class, 'destroy']);

    Route::get('lampiran-2f3', [Lampiran2f3Controller::class, 'index']);
    Route::get('lampiran-2f3/create', [Lampiran2f3Controller::class, 'create']);
    Route::post('lampiran-2f3/create', [Lampiran2f3Controller::class, 'store']);
    Route::get('lampiran-2f3/show/{id}', [Lampiran2f3Controller::class, 'show']);
    Route::get('lampiran-2f3/edit/{id}', [Lampiran2f3Controller::class, 'edit']);
    Route::post('lampiran-2f3/edit/{id}', [Lampiran2f3Controller::class, 'update']);
    Route::delete('lampiran-2f3/delete/{id}', [Lampiran2f3Controller::class, 'destroy']);

    Route::get('monitoring-pdp', [MonitoringPdpController::class, 'index']);
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

    Route::get('profile', [ProfileController::class, 'index']);
    Route::post('profile', [ProfileController::class, 'update']);
});