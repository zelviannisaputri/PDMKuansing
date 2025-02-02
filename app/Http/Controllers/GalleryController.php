<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all(); // Mengambil semua data galeri
        return view('admin.gallery', data: [
            'judul' => "GALLERY PDM", // Judul halaman
            'pesan' => "Gallery pesan PDM", // Pesan (jika diperlukan)
            'galleries' => $galleries // Mengirimkan data galeri ke view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'desc' => 'required|string',
        //     'type' => 'required|in:foto,video',
        //     //     'path' => 'required|file|mimes:jpeg,png,jpg,mp4|max:20480'
        // ]);


        if ($request->ids == 'PUT') {
            $file = $request->file('gambar');
            $filePath = $file->store('galleries', 'public');
            Gallery::create([
                'title' => $request->title,
                'desc' => $request->deskripsi,
                'type' => $request->tipe_galeri,
                'path' => $filePath
            ]);
            $pesan = "Tambah";
        } else {
            $gallery = Gallery::where('id', $request->ids)->first();
            $gallery->title = $request->title;
            $gallery->desc = $request->deskripsi;
            $gallery->type = $request->tipe_galeri;
            //$gallery->path = $filePath;
            if ($request->hasFile('path')) {
                // Hapus file lama jika ada
                Storage::delete($gallery->path);
                // Upload file baru
                $file = $request->file('gambar');
                $path = $file->store('galleries', 'public');
                $gallery->path = $path; // Simpan path ke kolom path
            }
            $gallery->save();
            $pesan = "Update";

        }
        return redirect()->back()->with('success', $pesan . ' galeri berhasil dengan title ' . $request->title);
        // return response()->json(['message' => 'Galeri berhasil disimpan!']);


    }
    public function addNewGallery(Request $r)
    {
        // dd($r);
        if ($r->galleryId == null) {
            // Jika tidak ada ID galeri, buat galeri baru
            $gallery = new Gallery();
            $gallery->title = $r->title; // Ubah sesuai dengan kolom di tabel galeri
            $gallery->desc = $r->desc; // Ubah sesuai dengan kolom di tabel galeri
            $gallery->type = $r->type; // Ubah sesuai dengan kolom di tabel galeri

            if ($r->hasFile('path')) {
                $file = $r->file('path');
                $path = $file->store('public/galleries');
                $gallery->path = $path; // Simpan path ke kolom path
            }

            $gallery->save();
        } else {
            // Jika ada ID galeri, perbarui galeri yang ada
            $gallery = Gallery::where('id', $r->galleryId)->first();
            $gallery->title = $r->title;
            $gallery->desc = $r->desc;
            $gallery->type = $r->type;

            if ($r->hasFile('path')) {
                // Hapus file lama jika ada
                Storage::delete($gallery->path);

                // Upload file baru
                $file = $r->file('path');
                $path = $file->store('public/galleries');
                $gallery->path = $path; // Simpan path ke kolom path
            }

            $gallery->save();
        }

        return redirect('/gallery'); // Redirect ke halaman galeri
    }

    public function detail($id)
    {

        return view('detailgaleri')
            //->with('content', 'dashboard')  
            ->with('id', $id);
    }
    public function update(Request $request, Gallery $gallery, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $gallery->title = $request->title;
        $gallery->desc = $request->desc;
        $gallery->type = $request->type;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $filePath = $file->store('galleries', 'public');
            $gallery->path = $filePath;
        }

        $gallery->save();

        return response()->json(['message' => 'Galeri berhasil diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::where('id', $id)->first();
        // foreach (json_decode($gallery->path) as $value) {
        //     Storage::delete($value);
        // }
        $gallery->delete();

        return redirect('/gallery')->with('success', 'Menghapus berhasil dengan title ' . $gallery->title);

    }
}
