<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\CustomAuthController;
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
    return view('dashboard');
});

Route::resource('students', StudentController::class);
// Route::get('/students/create', [StudentController::class, 'students.create']);
// Route::get('/students/customcreateSt', [StudentController::class, 'students.customcreateSt']->name('createstu'));

Route::get('/image-upload', [FileUpload::class, 'createForm']);
 
Route::post('/image-upload', [FileUpload::class, 'fileUpload'])->name('imageUpload');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('dashboard-custom', [CustomAuthController::class, 'customdashboard'])->name('dashboard-custom');  
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
