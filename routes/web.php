<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// 註冊登錄等
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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
//     return ['Laravel' => app()->version()];
// });
Route::get('/', [WebController::class, 'jump_Introduction']);
Route::get('/home', [WebController::class, 'jump_Home']);
Route::get('/about_us', [WebController::class, 'jump_About_us']);
Route::get('/comic', [WebController::class, 'jump_Comic']);

Route::get('/collections', [WebController::class, 'jump_Collections']);
Route::get('/works', [WebController::class, 'works']);
Route::get('/collections_gallery', [WebController::class, 'jump_Collections_gallery']);

Route::get('/sales', [WebController::class, 'jump_Sales']);
Route::get('/commodity_case', [WebController::class, 'jump_Commodity_Case']);
Route::get('/commodity_sales', [WebController::class, 'jump_Commodity_Sales']);
Route::get('/commodity_sticker', [WebController::class, 'jump_Commodity_Sticker']);


Route::get('/Alikoi', [WebController::class, 'jump_Alikoi']);

Route::get('/register', [WebController::class, 'jump_Register']);

// require __DIR__.'/auth.php';

// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('dashboard');
// });

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest')
                ->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('login');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.store');

Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
