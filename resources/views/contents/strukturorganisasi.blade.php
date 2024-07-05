@extends('layouts.app')

@section('title')
    Struktur Organisasi | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container py-4 min-h-screen">
        <div class="grid">
            <div>
                @if (count($strukturorganisasi) > 0)
                    <h1 class="pb-2">Struktur Organisasi</h1>
                    <hr class="pb-2">
                    @foreach ($strukturorganisasi as $str)
                        <div class="col-md-12">
                            <div class="content-box" style="">
                                <div class="pb-4">
                                    <h3 style="margin: 0">{{ $str->judul_struktur }}</h3>
                                    <p style="margin: 0">{{ $str->deskripsi_struktur }}</p>
                                </div>
                                {{-- <hr style="margin: 10px 0"> --}}
                                <img src="{{ asset('storage/' . $str->gambar_struktur) }}" alt="Struktur Organisasi"
                                    class="img-fluid">
                            </div>
                        </div>
                    @endforeach
                @else
                    <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                        style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
                    <h2 class="text-center">Tidak ada konten</h2>
                @endif
            </div>
        </div>
    </div>
@endsection
