@extends('layouts.app')

@section('title')
    Berita | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container py-8">
        <h1 class="pb-4">Berita</h1>
        <div class="grid grid-cols-12 gap-4">
            {{-- <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> --}}
            <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9">
                <div class="grid gap-4 grid-cols-12">
                    @foreach ($berita as $beritas)
                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> --}}
                        <div class="col-span-12 md:col-span-6">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{ asset('storage/' . $beritas->image) }}" class="w-full h-[200px] object-cover"
                                        alt="research">
                                    <ul class="news-date2">
                                        <li> {{ Carbon\Carbon::parse($beritas->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F') }}
                                        </li>
                                        <li>{{ Carbon\Carbon::parse($beritas->created_at)->format('Y') }}</li>
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold line-clamp-2"><a
                                        href="{{ route('detail-berita', $beritas->slug) }}">{{ $beritas->title }}</a>
                                </h3>
                                <ul class="title-bar-high news-comments">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>
                                            Admin</a></li>
                                    <li><a href="#"><i class="fa fa-tags"
                                                aria-hidden="true"></i>{{ $beritas->category->name }}</a>
                                    </li>
                                    <li>
                                        <span class="line-clamp-3">{{ $beritas->description }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    @if (count($berita) == 0)
                        <div class="col-span-12 md:col-span-6 lg:col-span-8">
                            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                                style="object-fit:cover; margin-top:5% !important; display: block; margin: 0 auto;">
                            <h2 class="text-center">Tidak ada artikel</h2>
                        </div>
                    @endif
                </div>
                {{ $berita->links('contents.pagination') }}
            </div>
            <div class="col-span-12 sm:col-span-4 md:col-span-3">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori</h3>
                            <ul class="sidebar-categories">
                                @if (count($kategori) < 1)
                                    <li>Tidak ada kategori</li>
                                @else
                                    @foreach ($kategori as $kt)
                                        <li><a href=""> {{ $kt->name }} </a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Berita Terbaru</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    @if (count($berita) < 1)
                                        <li>Tidak ada berita lain</li>
                                    @else
                                        @foreach ($berita as $beritas)
                                            <li>
                                                <div class="latest-research-img">
                                                    <a href="{{ $beritas->slug }}"><img
                                                            src="{{ asset('storage/' . $beritas->image) }}"
                                                            class="img-responsive" alt="skilled"></a>
                                                </div>
                                                <div class="latest-research-content">
                                                    <h6> {{ Carbon\Carbon::parse($beritas->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y') }}
                                                    </h6>
                                                    <p style="font-size: 12px">{{ $beritas->title }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
