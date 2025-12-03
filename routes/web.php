<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PdfController;
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


Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login/check',[AdminController::class,'check']);
Route::get('admin/profile',[AdminController::class,'profile']);
  
Route::middleware(['checkUser'])->group(function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('', [AdminController::class, 'admin']);
        Route::get('/logout', [AdminController::class, 'logout']);
    });

    Route::get('admin/hero/list',[HeroController::class,'list']);
    Route::get('admin/hero/create',[HeroController::class,'create']);
    Route::post('admin/hero/insert',[HeroController::class,'insert']);
    Route::get('admin/hero/detail/{id}',[HeroController::class,'detail']);
    Route::get('admin/hero/delete/{id}',[HeroController::class,'delete']);

    ////education///

    Route::get('admin/education/education/{cv_id}', [EducationController::class, 'education']);
    Route::post('admin/education/insert',[EducationController::class,'insert']);

    ////skilll////

    Route::get('admin/skill/create', [SkillController::class, 'skillcreate']);
    Route::post('admin/skill/insert', [SkillController::class, 'insert']);


    Route::get('admin/work/create', [WorkController::class, 'create']);
    Route::post('admin/work/insert', [WorkController::class, 'insert']);


    Route::get('admin/language/language', [LanguageController::class, 'language']);
    Route::post('admin/language/insert', [LanguageController::class, 'insert']);


    Route::get('/cv-pdf/{id}', [PdfController::class, 'download'])->name('cv.pdf');
 
});
