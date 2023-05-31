<?php

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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');

#########

// Login routes
Route::get('login/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('login/admin', [LoginController::class, 'adminLogin'])->name('admin.login.submit');
Route::get('login/doctor', [LoginController::class, 'showDoctorLoginForm'])->name('doctor.login');
Route::post('login/doctor', [LoginController::class, 'doctorLogin'])->name('doctor.login.submit');
Route::get('login/patient', [LoginController::class, 'showPatientLoginForm'])->name('patient.login');
Route::post('login/patient', [LoginController::class, 'patientLogin'])->name('patient.login.submit');


Route::get('/doctor/register', [RegisterController::class, 'showDoctorRegisterForm'])->name('doctor.register-view');
Route::post('/doctor/register', [RegisterController::class, 'createDoctor'])->name('doctor.register');

Route::get('/patient/register', [RegisterController::class, 'showPatientRegisterForm'])->name('patient.register-view');
Route::post('/patient/register', [RegisterController::class, 'createPatient'])->name('patient.register');
