@extends('layouts.app')

@section('title')
    Prestasi {{ $kategoriprestasi }} | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen py-4">
        <div>
            @if (count($prestasi))
                <h2 class="pb-2">Daftar Prestasi {{ $kategoriprestasi }}</h2>
                <hr class="pb-4">
                @foreach ($prestasi as $item)
                    <div class="card mb-3">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-4">
                                <img src="{{ asset('storage/' . $item->gambar) }}"
                                    class="w-full h-[100px] lg:h-full object-cover" alt="{{ $item->nama_prestasi }}">
                            </div>
                            <div class="col-span-8">
                                <div class="card-body">
                                    <h2 class="card-title"><a
                                            style="color: #00256b; text-decoration: none; font-weight: bold;"
                                            href="@if ($kategoriprestasi == 'Siswa') {{ route('detail-prestasi-siswa', $item->slug) }}
                                            @elseif ($kategoriprestasi == 'Guru')
                                                {{ route('detail-prestasi-guru', $item->slug) }}
                                            @else
                                                {{ route('detail-prestasi-sekolah', $item->slug) }} @endif">{{ $item->nama_prestasi }}</a>
                                    </h2>
                                    <p class="card-text" style="margin: 0">
                                        {{ $item->jenisprestasi->nama }}<span> | </span>{{ $item->tingkatprestasi->nama }}
                                    </p>
                                    <p class="card-text" style="margin: 0">{{ $item->kategori }}</p>
                                    <p class="card-text" style="margin: 0"><small
                                            class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y') }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
