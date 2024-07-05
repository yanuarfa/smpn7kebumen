<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Galeri;
use App\Models\MenuLainnya;
use App\Models\Prestasi;
use App\Models\Sastra;
use App\Models\Unduh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendidikanController extends Controller
{
    public function unduh()
    {
        $unduh = Unduh::all();
        $menu = MenuLainnya::all();

        return view('contents.unduh', compact('unduh', 'menu'));
    }

    public function download($id)

    {
        $file = Unduh::find($id)->first();

        $path = storage_path('app/public/' . $file->file);


        if (Storage::disk('public')->exists($file->file)) {
            if (file_exists($path)) {
                return response()->download($path);
            }
        }
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        $menu = MenuLainnya::all();

        return view('contents.ekstrakurikuler', compact('ekstrakurikuler', 'menu'));
    }

    public function detailekstrakurikuler($slug)
    {
        $ekstrakurikuler = Ekstrakurikuler::where('slug', $slug)->first();
        $menu = MenuLainnya::all();

        return view('contents.detailekstrakurikuler', compact('ekstrakurikuler', 'menu'));
    }

    public function prestasisiswa()
    {
        $kategoriprestasi = 'Siswa';

        $prestasi = Prestasi::where('kategori', $kategoriprestasi)->get();
        $menu = MenuLainnya::all();

        return view('contents.prestasi', compact('kategoriprestasi', 'prestasi', 'menu'));
    }

    public function detailprestasisiswa($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();

        $menu = MenuLainnya::all();

        return view('contents.detailprestasi', compact('prestasi', 'menu'));
    }

    public function prestasiguru()
    {
        $kategoriprestasi = 'Guru';
        $menu = MenuLainnya::all();

        $prestasi = Prestasi::where('kategori', $kategoriprestasi)->get();

        return view('contents.prestasi', compact('kategoriprestasi', 'prestasi', 'menu'));
    }

    public function detailprestasiguru($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();
        $menu = MenuLainnya::all();

        return view('contents.detailprestasi', compact('prestasi', 'menu'));
    }

    public function prestasisekolah()
    {
        $kategoriprestasi = 'Sekolah';
        $menu = MenuLainnya::all();

        $prestasi = Prestasi::where('kategori', $kategoriprestasi)->get();

        return view('contents.prestasi', compact('kategoriprestasi', 'prestasi', 'menu'));
    }

    public function detailprestasisekolah($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();
        $menu = MenuLainnya::all();

        return view('contents.detailprestasi', compact('prestasi', 'menu'));
    }

    public function galeri()
    {
        $menu = MenuLainnya::all();
        $galeri = Galeri::all();

        return view('contents.galeri', compact('menu', 'galeri'));
    }

    public function sastra()
    {
        $menu = MenuLainnya::all();
        $sastra = Sastra::all();

        return view('contents.sastra', compact('menu', 'sastra'));
    }

    public function uploadsastra(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string|max:255',
            'sosial_media' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'file_karya' => 'required|file|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi_karya' => 'nullable|string',
        ]);

        $path = $request->file('file_karya')->store('sastra', 'public');
        $upload = new Sastra();
        $upload->nama_pengguna = $request->nama_pengguna;
        $upload->sosial_media = $request->sosial_media;
        $upload->judul = $request->judul;
        $upload->file_karya = $path;
        $upload->deskripsi_karya = $request->deskripsi_karya;
        $upload->created_at = now();
        $upload->updated_at = now();
        $upload->save();

        return redirect()->route('sastra')->with('success', 'Karya sastra berhasil diunggah!');
    }
}
