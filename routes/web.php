<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardPengumumanController;
use App\Http\Controllers\DashboardCategoriesController;
use App\Http\Controllers\DashboardWorkspaceController;
use App\Http\Controllers\DashboardStudioController;
use App\Http\Controllers\DashboardPrestasiController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardFasilitasController;
use App\Http\Controllers\DashboardImageFasilitasController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\CheckslugController;

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

Route::get('/', [BerandaController::class, 'index']);

// --- NAVBAR ---
Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pengumuman/{pengumuman:slug}', [PengumumanController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/prestasi', [PrestasiController::class, 'index']);

// --- LOGIN ---
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout']);


//--- PRODI --- 
Route::get('/prodi/elektronika-manufaktur', [ProdiController::class, 'manufaktur']);
Route::get('/prodi/teknik-instrumentasi', [ProdiController::class, 'instrumentasi']);
Route::get('/prodi/rekayasa-pembangkit-energi', [ProdiController::class, 'rpe']);
Route::get('/prodi/teknologi-rekayasa-elektronika', [ProdiController::class, 'elektronika']);
Route::get('/prodi/teknik-mekatronika', [ProdiController::class, 'mekatronika']);
Route::get('/prodi/teknik-robotika', [ProdiController::class, 'robotika']);
//--- END PRODI --- 

//--- CRUD PENGUMUMAN --- 
Route::get('/dashboard/SlugPengumuman', [CheckslugController::class, 'SlugPengumuman'])->middleware('auth');
Route::resource('/dashboard/pengumuman', DashboardPengumumanController::class)->middleware('auth');
//--- CRUD CATEGORIES --- 
Route::get('/dashboard/SlugCategories', [CheckslugController::class, 'SlugCategories'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoriesController::class)->middleware('auth');
//--- CRUD WORKSPACE --- 
Route::get('/dashboard/add_jurusan_workspace', [DashboardWorkspaceController::class, 'add_jurusan'])->middleware('auth');
Route::resource('/dashboard/workspace', DashboardWorkspaceController::class)->middleware('auth');
//--- CRUD STUDIO --- 
Route::get('/dashboard/add_jurusan_studio', [DashboardStudioController::class, 'add_jurusan'])->middleware('auth');
Route::resource('/dashboard/studio', DashboardStudioController::class)->middleware('auth');
//--- CRUD PRESTASI --- 
//Route::get('/dashboard/add_jurusan_studio', [DashboardStudioController::class, 'add_jurusan'])->middleware('auth');
Route::resource('/dashboard/prestasi', DashboardPrestasiController::class)->middleware('auth');
//--- CRUD DOSEN --- 
Route::resource('/dashboard/dosen', DashboardDosenController::class)->middleware('auth');
//--- CRUD PRODI --- 
Route::get('/dashboard/SlugProdi', [CheckslugController::class, 'SlugProdi'])->middleware('auth');
Route::resource('/dashboard/prodi', DashboardProdiController::class)->middleware('auth');
// --- CRUD FASILITAS ---
Route::resource('/dashboard/fasilitas', DashboardFasilitasController::class)->middleware('auth');
Route::resource('/dashboard/image_fasilitas', DashboardImageFasilitasController::class)->middleware('auth');
