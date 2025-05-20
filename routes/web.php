<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/about', function()
{
    return view('pages.contact');
});
Route::get('/siswa', function()
{
    return view('pages.siswa.index');
});

Route::get('/welcome', function()
{
    return view('pages.home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('login', [UserController::class, 'customLogin'])->name('login.post');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'customRegistration'])->name('register.post');
});

Route::group(['middleware' =>['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('master')->group(function () {
        Route::get('list-user', [DashboardController::class, 'list_user'])->name('list-user');
    });

    Route::post('signout', [UserController::class, 'logout'])->name('logout');

});