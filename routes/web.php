<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::domain('{username}.'. env('SESSION_DOMAIN'))->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('profile');
});

Auth::routes();

Route::get('/', function () {
    $users = User::all();
    return view('profile.index')->with('users', $users);
})->name('root');

Route::get('/home', [HomeController::class, 'index'])->name('home');
