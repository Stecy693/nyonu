<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/sign_in', [HomeController::class, 'sign_in'])->name('sign_in');

Route::get('/preview/certificat', function () {
    return view('certificates.leadership', [
        'certificate_name' => 'Certificat Nyonu - Leadership Feminin',
        'first_name' => 'Stella',
        'last_name' => 'Destanie',
        'leadership_type' => 'Leadership strategique de structuration institutionnelle',
        'leadership_short_type' => 'Vision institutionnelle',
        'badge_label' => 'Badge Vision Institutionnelle',
        'date' => now()->format('d/m/Y'),
        'reference' => 'NY-000001',
        'logo_data_uri' => null,
    ]);
})->name('preview.certificate');
