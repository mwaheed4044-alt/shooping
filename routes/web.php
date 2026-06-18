<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
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
    return view('first');
    
});


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
    Route::get('admin/hero/hello/{id}',[HeroController::class,'cv']);
    Route::get('admin/hero/delete/{id}',[HeroController::class,'delete']);
    Route::get('admin/hero/edit/{id}',[HeroController::class,'edit']);
    Route::post('admin/hero/update/{id}',[HeroController::class,'update']);

    ////education///

    Route::get('admin/education/education', [EducationController::class, 'education']);
    Route::post('admin/education/insert',[EducationController::class,'insert']);
    Route::get('admin/education/edit',[EducationController::class,'edit']);
    Route::post('admin/education/update',[EducationController::class,'update']);

    ////skilll////

    // Route::get('admin/skill/create', [SkillController::class, 'skillcreate']);
    Route::post('admin/skill/insert', [SkillController::class, 'insert']);
    Route::post('admin/skill/update', [SkillController::class, 'update']);


    // Route::get('admin/work/create', [WorkController::class, 'create']);
    Route::post('admin/work/insert', [WorkController::class, 'insert']);
    Route::post('admin/work/update', [WorkController::class, 'update']);


    // Route::get('admin/language/language', [LanguageController::class, 'language']);
    Route::post('admin/language/insert', [LanguageController::class, 'insert']);
    Route::post('admin/language/update', [LanguageController::class, 'update']);


    Route::get('admin/ajx/create', [PdfController::class, 'create']);
    Route::get('admin/ajx/list', [PdfController::class, 'list']);
    Route::post('admin/ajx/insert', [PdfController::class, 'insert']);
 
});
