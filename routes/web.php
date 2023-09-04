<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbCarsController;
use App\Http\Controllers\TbPenyewaController;
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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/pilihan-mobil', function () {
    return view('pilihan');
});
Route::get('/hubungi-kami', function () {
    return view('kontak');
});
Route::get('/detailmobil', function () {
    return view('detail');
});
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/mobil/detail/{id}', [
    TbCarsController::class,
    'detailmobil',
]);
Route::post('/sewa/mobil/{id}', [
    TbPenyewaController::class,
    'sewa',
]);
Route::get('/mobil_yang_disewa', [
    TbPenyewaController::class,
    'mobilyangsedangdisewa',
]);
Route::post('/mobil/kembalikan/{id}',[ 
    TbPenyewaController::class, 
    'kembalikanmobil'
    ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/penyewa',[ 
        TbPenyewaController::class, 
        'index'
        ]);
    Route::resource('/mobil', TbCarsController::class);
    
});
