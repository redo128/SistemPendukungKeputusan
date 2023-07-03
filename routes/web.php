<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
Use App\Http\Controllers\BerandaController;
Use App\Http\Controllers\PerhitunganController;
Use App\Http\Controllers\AlternatifController;
Use App\Http\Controllers\KriteriaBobotController;
Use App\Http\Controllers\KriteriaRatingsController;
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

Route::get('/', function () {
    return view('layout.index');
});
// Route::get('/kriteriabobot', function () {
//     return view('kriteriabobot.index');
// });
Route::resource('beranda', BerandaController::class);
Route::resource('kriteriabobot', KriteriaBobotController::class);
Route::resource('kriteriaratings', KriteriaRatingsController::class);
Route::resource('alternatif', AlternatifController::class);
Route::get('/keputusan',[AlternatifController::class,'keputusan']);
Route::get('/normalisasi',[PerhitunganController::class,'index']);
Route::get('/utility',[PerhitunganController::class,'utiliy']);
Route::get('/rank',[PerhitunganController::class,'rank']);
Route::get('/rank/order/{key}',[PerhitunganController::class,'hasil'])->name('rank.order');
