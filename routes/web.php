<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('dasboard');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('siswa', function () {
    return view('siswa');
});
<<<<<<< Updated upstream


Route::get('login', [UserController::class, 'index'])->name('login');

Route::post('login', [UserController::class, 'authentication'])->name('authen');

=======
>>>>>>> Stashed changes
