<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Article;
use App\Models\MenuLainnya;
use App\Models\Pengajar;
use App\Models\Sampul;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sampul = Sampul::all();
        $berita = Article::latest()->limit(3)->get();
        $pengajar = Pengajar::where('status', 'Aktif')->where('jabatan', '!=', 'Kepala Sekolah')->take(6)->inRandomOrder()->get();
        $kepalasekolah = Pengajar::where('jabatan', 'Kepala Sekolah')->first();
        $visimisi = VisiMisi::first();
        $menu = MenuLainnya::all();
        return view('contents.beranda', compact('pengajar', 'kepalasekolah', 'sampul', 'berita', 'visimisi', 'menu'));
    }

    public function alumni()
    {
        $menu = MenuLainnya::all();
        $alumni = Alumni::latest()->get();

        return view('contents.alumni', compact('menu', 'alumni'));
    }

    public function uploadalumni(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'angkatan' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'foto' => 'required|file|mimes:jpg,jpeg,png,webp|max:2048',
            'pesan' => 'required|string|max:255',
        ]);

        $path = $request->file('foto')->store('alumni', 'public');
        $upload = new Alumni();
        $upload->nama = $request->nama;
        $upload->angkatan = $request->angkatan;
        $upload->pekerjaan = $request->pekerjaan;
        $upload->foto = $path;
        $upload->pesan = $request->pesan;
        $upload->created_at = now();
        $upload->updated_at = now();
        $upload->save();

        return redirect()->route('alumni')->with('success', 'Alumni berhasil ditambahkan!');
    }
}
