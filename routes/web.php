<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BeritaController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home/sambutanpimpinan', function () {
    return view('sambutan');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//DROPDOWN PROFIL
Route::get('/profil/sejarah', function () {
    return view('profil.sejarah');
});
Route::get('/profil/visi-misi', function () {
    return view('profil.visi-misi');
});
Route::get('/profil/profil-pimpinan', function () {
    return view('profil.profil-pimpinan');
});
Route::get('/profil/struktur-organisasi', function () {
    return view('profil.struktur-organisasi');
});
//DROPDOWN LEMBAGA
Route::get('/lembaga/lembaga1', function () {
    return view('lembaga.lembaga1');
});
Route::get('/lembaga/lembaga2', function () {
    return view('lembaga.lembaga2');
});
Route::get('/lembaga/lembaga3', function () {
    return view('lembaga.lembaga3');
});
Route::get('/lembaga/lembaga4', function () {
    return view('lembaga.lembaga4');
});
Route::get('/lembaga/lembaga5', function () {
    return view('lembaga.lembaga5');
});
Route::get('/lembaga/lembaga6', function () {
    return view('lembaga.lembaga6');
});
Route::get('/lembaga/lembaga7', function () {
    return view('lembaga.lembaga7');
});
Route::get('/lembaga/lembaga8', function () {
    return view('lembaga.lembaga8');
});
Route::get('/lembaga/lembaga9', function () {
    return view('lembaga.lembaga9');
});
Route::get('/lembaga/lembaga10', function () {
    return view('lembaga.lembaga10');
});
Route::get('/lembaga/lembaga11', function () {
    return view('lembaga.lembaga11');
});
Route::get('/lembaga/lembaga12', function () {
    return view('lembaga.lembaga12');
});
//DROPDOWN MAJELIS
Route::get('/majelis/majelis1', function () {
    return view('majelis.majelis1');
});
Route::get('/majelis/majelis2', function () {
    return view('majelis.majelis2');
});
Route::get('/majelis/majelis3', function () {
    return view('majelis.majelis3');
});
Route::get('/majelis/majelis4', function () {
    return view('majelis.majelis4');
});
Route::get('/majelis/majelis5', function () {
    return view('majelis.majelis5');
});
Route::get('/majelis/majelis6', function () {
    return view('majelis.majelis6');
});
Route::get('/majelis/majelis7', function () {
    return view('majelis.majelis7');
});
Route::get('/majelis/majelis8', function () {
    return view('majelis.majelis8');
});
Route::get('/majelis/majelis9', function () {
    return view('majelis.majelis9');
});
Route::get('/majelis/majelis10', function () {
    return view('majelis.majelis10');
});
Route::get('/majelis/majelis11', function () {
    return view('majelis.majelis11');
});
Route::get('/majelis/majelis12', function () {
    return view('majelis.majelis12');
});
Route::get('/jadwal', function () {
    return view('jadwal.jadwal');
});
Route::get('/jadwal/rapatkerja', function () {
    return view('jadwal.rapatkerja');
});

Route::get('/jadwal/musyawarahdaerah', function () {
    return view('jadwal.musyawarahdaerah');
});

Route::get('/jadwal/pelatihan', function () {
    return view('jadwal.pelatihan');
});

Route::get('/jadwal/kegiatansosial', function () {
    return view('jadwal.kegiatansosial');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/galeri/detail/{id}', [GalleryController::class, "detail"]);
Route::get('/detailgaleri/{id}', [GalleryController::class, 'detail'])->name('detailgaleri.show');

Route::get('/dokumen', function () {
    return view('dokumen.dokumen');
});
Route::get('/lagumuhammadiyah', function () {
    return view('dokumen.lagumuhammadiyah');
});

Route::get('/suratkeputusan', function () {
    return view('dokumen.suratkeputusan');
});

Route::get('/suratedaran', function () {
    return view('dokumen.suratedaran');
});

Route::get('/pengumuman', function () {
    return view('dokumen.pengumuman');
});

Route::get('/bukupanduan', function () {
    return view('dokumen.bukupanduan');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/dashboard', function () {
    return view('admin.dash', ['content' => 'admin.dash']);
});



Route::get('/gallery', [GalleryController::class, 'index']);
// Route::post('/gallery', [GalleryController::class, "addNewGallery"]);
Route::post('/gallery', [GalleryController::class, 'store'])->name('simpangaleri');
Route::get('/gallery/{id}', [GalleryController::class, "destroy"]);
// Route::get('/gallery/detail/{id}', [GalleryController::class, "detail"]);
// Route::get('/detailproduct/{id}', [GalleryController::class, 'detail'])->name('detailproduct.show');


// Route::get('/berita', function () {
//     return view('admin.main', ['content' => 'admin.berita']);
// });

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/kontakkami', [KontakController::class, 'index']);