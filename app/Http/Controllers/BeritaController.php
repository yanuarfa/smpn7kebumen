<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\MenuLainnya;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $berita = Article::orderBy('created_at', 'desc')->paginate(8);
        $kategori = Category::all();
        $menu = MenuLainnya::all();

        return view('contents.berita', compact('berita', 'kategori', 'menu'));
    }

    public function detailberita($slug)
    {
        $berita = Article::where('slug', $slug)->first();
        $kategori = Category::all();
        $beritalain = Article::where('slug', '!=', $slug)->get();
        $menu = MenuLainnya::all();
        if ($beritalain && $beritalain->count() > 3) {
            $beritalain = $beritalain->random(3);
        }

        return view('contents.detailberita', compact('berita', 'kategori', 'beritalain', 'menu'));
    }
}
