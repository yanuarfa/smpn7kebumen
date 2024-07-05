<?php

namespace App\Http\Controllers;

use App\Models\MenuLainnya;
use App\Models\Pengajar;
use App\Models\Profil;
use App\Models\SaranaPrasarana;
use App\Models\StrukturOrganisasi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profilsekolah()
    {
        $profilsekolah = Profil::first();
        $menu = MenuLainnya::all();

        return view('contents.profilsekolah', compact('profilsekolah', 'menu'));
    }

    public function visimisi()
    {
        $visimisi = VisiMisi::first();
        $menu = MenuLainnya::all();

        return view('contents.visimisi', compact('visimisi', 'menu'));
    }

    public function strukturorganisasi()
    {
        $strukturorganisasi = StrukturOrganisasi::all();
        $menu = MenuLainnya::all();

        return view('contents.strukturorganisasi', compact('strukturorganisasi', 'menu'));
    }

    public function pengajar()
    {
        $pengajar = Pengajar::where('status', 'Aktif')->paginate(12);
        $menu = MenuLainnya::all();
        return view('contents.pengajar', compact('pengajar', 'menu'));
    }

    public function saranaprasarana()
    {
        $menu = MenuLainnya::all();
        $saranaprasarana = SaranaPrasarana::all();

        return view('contents.saranaprasarana', compact('menu', 'saranaprasarana'));
    }
}
