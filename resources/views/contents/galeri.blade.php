@extends('layouts.app')

@section('title')
    Galeri | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen pt-4 pb-8">
        @if ($galeri->count() > 0)
            <h1 class="pb-2">Galeri</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($galeri as $item)
                    <div class="bg-white shadow-md p-3">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->deskripsi_foto }}"
                            class="w-full h-48 object-cover">
                        <p class="text-sm text-gray-500 line-clamp-5 text-center">{{ $item->deskripsi_foto }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
            <h2 class="text-center">Tidak ada foto</h2>
        @endif
    </div>
@endsection
