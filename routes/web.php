<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;


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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home')->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::view('/service', 'service')->name('service');

Route::view('/about', 'about')->name('about');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::view('/contact', 'contact')->name('contact');

Route::post('/send-whatsapp', function (Request $request) {
    $data = [
        'Nama' => $request->input('nama'),
        'Email' => $request->input('email'),
        'Alamat' => $request->input('alamat'),
        'Provinsi' => $request->input('provinsi'),
        'Kota' => $request->input('kota'),
        'Kecamatan' => $request->input('kecamatan'),
        'Kelurahan' => $request->input('kelurahan'),
        'Kode Pos' => $request->input('kode_pos'),
        'RT' => $request->input('rt'),
        'RW' => $request->input('rw'),
        'Pesan' => $request->input('pesan'),
    ];

    $message = '';
    foreach ($data as $key => $value) {
        $value = $value ?? '-';
        $message .= "*{$key}:* {$value}%0A";
    }

    $phone = '6281554133818'; // Ganti dengan nomor WA tujuan tanpa spasi tanpa +
    $url = "https://wa.me/{$phone}?text=" . $message;

    return redirect()->away($url);
})->name('send.whatsapp');
