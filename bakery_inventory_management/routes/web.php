<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
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


// Web API Routes ----------------------------------------------------
Route::post('/user-signup',[UserController::class,'UserSignup']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
// Token Verify
Route::post('/reset-password',[UserController::class,'ResetPassword'])
    ->middleware(TokenVerificationMiddleware::class);

Route::get('/user-profile',[UserController::class,'UserProfile'])
    ->middleware(TokenVerificationMiddleware::class);
Route::post('/user-update',[UserController::class,'UpdateProfile'])
    ->middleware(TokenVerificationMiddleware::class);


// User Logout ----------------------------------------------------
Route::get('/logout',[UserController::class, 'UserLogout']);



// Web Page Routes ----------------------------------------------------
Route::get('/', function () {
    return redirect('/userLogin');
});
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userSignup',[UserController::class,'SignupPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOtpPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])
    ->middleware(TokenVerificationMiddleware::class);

Route::get('/dashboard',[UserController::class,'DashboardPage'])
    ->middleware(TokenVerificationMiddleware::class);

Route::get('/userProfile',[UserController::class,'ProfilePage'])
    ->middleware(TokenVerificationMiddleware::class);

Route::get('/categoryPage',[CategoryController::class,'CategoryPage'])
    ->middleware(TokenVerificationMiddleware::class);


// Category API Routes ----------------------------------------------------
Route::post('/create-category',[CategoryController::class,'CategoryCreate'])
    ->middleware(TokenVerificationMiddleware::class);

Route::post('/list-category',[CategoryController::class,'CategoryList'])
    ->middleware(TokenVerificationMiddleware::class);

Route::post('/update-category',[CategoryController::class,'CategoryUpdate'])
    ->middleware(TokenVerificationMiddleware::class);

Route::post('/delete-category',[CategoryController::class,'CategoryDelete'])
    ->middleware(TokenVerificationMiddleware::class);

