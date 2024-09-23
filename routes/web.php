<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('/mobile',[\App\Http\Controllers\MobileController::class,'index'])->name('mobile.index');
Route::get('/project-management',[\App\Http\Controllers\ProjectManagementController::class,'index'])->name('project-management.index');
Route::get('/real-estate',[\App\Http\Controllers\RealEstateController::class,'index'])->name('real-estate.index');
Route::get('/rf-id',[\App\Http\Controllers\RfIdController::class,'index'])->name('rf-id.index');
Route::get('/web',[\App\Http\Controllers\WebController::class,'index'])->name('web.index');
Route::get('/erp',[\App\Http\Controllers\ErpController::class,'index'])->name('erp.index');
Route::get('/hardware',[\App\Http\Controllers\HardWareController::class,'index'])->name('hardware.index');
Route::get('/contact-us',[\App\Http\Controllers\ContactUsController::class,'index'])->name('contact-us.index');
Route::get('/cloud-services',[\App\Http\Controllers\CloudServiceController::class,'index'])->name('cloud-service.index');
Route::get('/education-management',[\App\Http\Controllers\EducationManagementController::class,'index'])->name('education-management.index');
Route::get('/human-resource',[\App\Http\Controllers\HumanResourceController::class,'index'])->name('human-resource.index');
Route::get('/factor',[\App\Http\Controllers\FactorController::class,'index'])->name('factor.index');
