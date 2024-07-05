@extends('layouts.app')

@section('title')
    Sarana & Prasarana | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen py-4">
        @if ($saranaprasarana->count() > 0)
            <h1 class="pb-1">Sarana Prasarana</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($saranaprasarana as $item)
                    <div class="bg-white shadow-md p-3">
                        <img src="{{ asset('storage/' . $item->file_gambar) }}" alt="{{ $item->nama }}"
                            class="w-full h-48 object-cover">
                        <h2 class="text-lg font-semibold mt-2">{{ $item->nama }}</h2>
                        <p class="text-sm text-gray-500 line-clamp-5">{!! $item->deskripsi !!}</p>
                    </div>
                @endforeach
            </div>
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        @endif
    </div>
@endsection
