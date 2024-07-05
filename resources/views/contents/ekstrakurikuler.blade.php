@extends('layouts.app')

@section('title')
    Ekstrakurikuler | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen py-4">
        <div>
            @if (count($ekstrakurikuler))
                <h2 class="pb-4">Daftar Ekstrakurikuler</h2>
                @foreach ($ekstrakurikuler as $item)
                    <div class="card mb-3" style="margin: 20px 0; padding: 20px">
                        <div class="grid gap-4 grid-cols-12 no-gutters">
                            <div class="col-md-4 col-span-4">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-[200px] object-contain"
                                    alt="{{ $item->nama }}">
                            </div>
                            <div class="col-md-8 col-span-8">
                                <div class="card-body">
                                    <h2 class="card-title" style="margin: 0"><a
                                            style="color: #00256b; text-decoration: none; font-weight: bold;"
                                            href="{{ route('detail-ekstrakurikuler', $item->slug) }}">{{ $item->nama }}</a>
                                    </h2>
                                    <p class="card-text" style="margin: 0">
                                        oleh Admin<span> | </span>{{ $item->nama }}
                                    </p>
                                    <p class="card-text" style="margin: 0"><small
                                            class="text-muted">{{ $item->created_at }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @else
                <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                    style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
                <h2 class="text-center">Tidak ada prestasi</h2>
            @endif
        </div>
        {{-- @if ($visimisi)
    @else
        <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
            style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
        <h2>Tidak ada prestasi</h2>
    @endif --}}
    </div>
@endsection
