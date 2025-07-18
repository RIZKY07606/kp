<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactLog;


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

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::view('/service', 'service')->name('service');

Route::view('/about', 'about')->name('about');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::view('/contact', 'contact')->name('contact');

Route::post('/send-contact', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'nama' => 'required|string',
    ], [
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'nama.required' => 'Nama wajib diisi',
    ]);

    $data = [
        'nama' => $request->input('nama', '-'),
        'email' => $request->input('email', '-'),
        'alamat' => $request->input('alamat', '-'),
        'provinsi' => $request->input('provinsi', '-'),
        'kota' => $request->input('kota', '-'),
        'kecamatan' => $request->input('kecamatan', '-'),
        'kelurahan' => $request->input('kelurahan', '-'),
        'kode_pos' => $request->input('kode_pos', '-'),
        'rt' => $request->input('rt', '-'),
        'rw' => $request->input('rw', '-'),
        'pesan' => $request->input('pesan', '-'),
    ];

    $labels = [
        'nama' => 'Nama',
        'email' => 'Email',
        'alamat' => 'Alamat',
        'provinsi' => 'Provinsi',
        'kota' => 'Kota',
        'kecamatan' => 'Kecamatan',
        'kelurahan' => 'Kelurahan',
        'kode_pos' => 'Kode Pos',
        'rt' => 'RT',
        'rw' => 'RW',
        'pesan' => 'Pesan',
    ];

    $body = "";
    foreach ($labels as $key => $label) {
        $value = $data[$key] ?? '-';
        $body .= "{$label}: {$value}\n";
    }

    $logData = array_merge($data, [
        'status' => 'sukses',
        'error_message' => null,
    ]);
    try {
        Mail::raw($body, function ($message) use ($request) {
            $message->to('your_email@gmail.com')
                    ->subject('Pesan dari Form Kontak Website');
            if ($request->filled('email')) {
                $message->replyTo($request->input('email'), $request->input('nama', 'Pengirim Website'));
            }
        });
    } catch (\Exception $e) {
        $logData['status'] = 'gagal';
        $logData['error_message'] = $e->getMessage();
        ContactLog::create($logData);
        return back()->withErrors(['email' => 'Gagal mengirim email: ' . $e->getMessage()]);
    }
    ContactLog::create($logData);
    return back()->with('success', 'Pesan Anda berhasil dikirim!');
})->name('send.contact');
