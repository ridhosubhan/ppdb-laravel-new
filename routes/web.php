<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\TestimonialsController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/sambutan-kaprodi', [HomeController::class, 'sambutanKaprodi'])->name('/sambutan-kaprodi');
Route::get('/tentang-mmt', [HomeController::class, 'tentangMMT'])->name('/tentang-mmt');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('/visi-misi');
Route::get('/supply-chain-management', [HomeController::class, 'scm'])->name('/supply-chain-management');
Route::get('/project-management', [HomeController::class, 'project_management'])->name('/project-management');

Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('/pendaftaran');
Route::post('/pendaftaran/store', [HomeController::class, 'store'])->name('/pendaftaran/store');
Route::get('/pendaftaran/detail', [HomeController::class, 'suksesDaftar'])->name('/pendaftaran/detail');
Route::get('/blog', [HomeController::class, 'blog'])->name('/blog');
Route::get('/blog/{slug}', [HomeController::class, 'showBlog']);
Route::post('/blog/search', [HomeController::class, 'searchBlog'])->name('/blog/search');
Route::get('/blog/category/{slug}', [HomeController::class, 'categoryBlog']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [LoginController::class, 'register'])->name('/register');
Route::post('/postRegister', [LoginController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [LoginController::class, 'logout'])->name('/logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    route::get('/dashboard', [DashboardsController::class, 'index'])->name('/dashboard');

    route::get('/data-pendaftaran', [StudentsController::class, 'index'])->name('/data-pendaftaran');
    route::post('/get-pendaftar', [StudentsController::class, 'getPendaftar'])->name('/get-pendaftar');
    route::post('/approve-pendaftaran', [StudentsController::class, 'approvePendaftaran'])->name('/approve-pendaftaran');
    route::post('/denied-pendaftaran', [StudentsController::class, 'deniedPendaftaran'])->name('/denied-pendaftaran');
    route::post('/hapus-pendaftar', [StudentsController::class, 'hapusPendaftar'])->name('/hapus-pendaftar');
    route::get('/kartu-pendaftaran-admin/{id}', [StudentsController::class, 'kartuPendaftaranAdmin'])->name('/kartu-pendaftaran-admin');

    route::get('/kategori-artikel', [CategoriesController::class, 'index'])->name('/kategori-artikel');
    route::get('/kategori-artikel/create', [CategoriesController::class, 'create'])->name('/kategori-artikel/create');
    route::post('/kategori-artikel/store', [CategoriesController::class, 'store'])->name('/kategori-artikel/store');
    route::get('/kategori-artikel/store/check-slug', [CategoriesController::class, 'checkSlug'])->name('/kategori-artikel/store/check-slug');
    route::get('/kategori-artikel/edit/{id}', [CategoriesController::class, 'edit']);
    route::post('/kategori-artikel/update', [CategoriesController::class, 'update'])->name('/kategori-artikel/update');
    route::post('/kategori-artikel/delete', [CategoriesController::class, 'delete'])->name('/kategori-artikel/delete');

    route::get('/artikel-berita', [ArticlesController::class, 'index'])->name('/artikel-berita');
    route::get('/artikel-berita/create', [ArticlesController::class, 'create'])->name('/artikel-berita/create');
    route::post('/artikel-berita/store', [ArticlesController::class, 'store'])->name('/artikel-berita/store');
    route::get('/artikel-berita/store/check-slug', [ArticlesController::class, 'checkSlug'])->name('/artikel-berita/store/check-slug');
    route::get('/artikel-berita/edit/{id}', [ArticlesController::class, 'edit']);
    route::post('/artikel-berita/update', [ArticlesController::class, 'update'])->name('/artikel-berita/update');
    route::post('/artikel/delete', [ArticlesController::class, 'delete'])->name('/artikel/delete');

    route::get('/testimonial', [TestimonialsController::class, 'index'])->name('/testimonial');
    route::get('/testimonial/create', [TestimonialsController::class, 'create'])->name('/testimonial/create');
    route::post('/testimonial/store', [TestimonialsController::class, 'store'])->name('/testimonial/store');
    route::get('/testimonial/edit/{id}', [TestimonialsController::class, 'edit']);
    route::post('/testimonial/update', [TestimonialsController::class, 'update'])->name('/testimonial/update');
    route::post('/testimonial/delete', [TestimonialsController::class, 'delete'])->name('/testimonial/delete');
});

Route::group(['middleware' => ['auth', 'ceklevel:siswa']], function () {
    route::get('/dashboard', [DashboardsController::class, 'index'])->name('dashboard');
    route::get('/status-pendaftaran', [StudentsController::class, 'statusPendaftaran'])->name('/status-pendaftaran');
    route::get('/cetak-kartu-pendaftaran', [StudentsController::class, 'cetakKartuPendaftaran'])->name('/cetak-kartu-pendaftaran');

    route::get('/testimoni', [TestimonialsController::class, 'indexTestimoni'])->name('/testimoni');
    route::get('/testimoni/create', [TestimonialsController::class, 'createTestimoni'])->name('/testimoni/create');
    route::post('/testimoni/store', [TestimonialsController::class, 'storeTestimoni'])->name('/testimoni/store');
    route::get('/testimoni/edit/{id}', [TestimonialsController::class, 'editTestimoni']);
    route::post('/testimoni/update', [TestimonialsController::class, 'updateTestimoni'])->name('/testimoni/update');
});
