<?php

use App\Http\Controllers\TokoController;
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

Route::get('/home', function () {
    echo "Selamat Datang di Toko Pojok :)";
});

Route::prefix('/category')->group(function(){
    Route::get('/rinso',[TokoController::class,'rinso']);
    Route::get('/lifebuoy',[TokoController::class,'lifebuoy']);
    Route::get('/sunlight',[TokoController::class,'sunlight']);
});

Route::get('/news/{promo}',[TokoController::class,'promo']);

Route::prefix('/program')->group(function(){
    Route::get('/gajiKaryawan',[TokoController::class,'gajiKaryawan']);
    Route::get('/restok',[TokoController::class,'restok']);
    Route::get('/bayarKontrak',[TokoController::class,'bayarKontrak']);
});

Route::get('/about-us', function () {
    echo "Kami adalah toko online dengan banyak promo :)";
});