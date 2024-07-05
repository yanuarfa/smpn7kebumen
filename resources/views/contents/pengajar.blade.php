@extends('layouts.app')

@section('title')
    Pengajar | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container min-h-screen py-4">
        @if ($pengajar->count() > 0)
            <h1 class="pb-1">Pengajar</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach ($pengajar as $p)
                    <div class="p-4 shadow h-full overflow-hidden">
                        <img src="{{ asset('storage/' . $p->foto) }}" alt="{{ $p->nama }}"
                            class="w-full object-cover pb-2">
                        <div class="flex flex-col justify-between h-[160px]">
                            <h4 class="text-center line-clamp-2 text-gray-950">{{ $p->nama }}</h4>
                            <p class="text-center">Guru {{ $p->bidang }}</p>
                            <div class="flex flex-col justify-center items-center">
                                <ul class="flex gap-2 pt-2 *:bg-[#fdc800] *:px-2 *:py-1">
                                    <li><a href="" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="mailto:{{ $p->email }}"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $pengajar->links('contents.pagination') }}
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
    margin: 0 auto;">
            <h2 class="text-center">Tidak ada pengajar</h2>
        @endif

    </div>
@endsection
