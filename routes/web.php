<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AssetOfficerController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('admin/user', UserController::class);
Route::resource('admin/department', DepartmentController::class);
Route::resource('admin/device', DeviceController::class);
Route::resource('admin/brand', BrandController::class);
Route::resource('admin/location', LocationController::class);
Route::resource('admin/history', HistoryController::class);

Route::resource('/asset', AssetController::class);
Route::resource('/assetofficer', AssetOfficerController::class);


Route::get('admin/department/pic/{id}',  [App\Http\Controllers\DepartmentController::class, 'pic']);
Route::get('asset/department/{id}', [App\Http\Controllers\AssetController::class, 'department']);
Route::get('asset/device/{id}', [App\Http\Controllers\AssetController::class, 'device']);
Route::get('assetofficer/department/{id}', [App\Http\Controllers\AssetOfficerController::class, 'department']);
Route::get('assetofficer/device/{id}', [App\Http\Controllers\AssetOfficerController::class, 'device']);

Route::get('asset/department/lupus/43', [App\Http\Controllers\AssetController::class, 'department']);

Route::get('/file-import',[AssetController::class,'importView'])->name('import-view');
Route::post('/import',[AssetController::class,'import'])->name('import');


Route::get('asset/department/downloadPdf/{id}', [App\Http\Controllers\AssetController::class, 'downloadPdf']);
Route::get('asset/device/downloadPdf/{id}', [App\Http\Controllers\AssetController::class, 'downloadPdf']);
