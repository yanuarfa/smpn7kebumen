@extends('layouts.app')

@section('title')
    {{ $berita->title }}
@endsection

@section('content')
    <div class="container py-8">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-8 md:col-span-9">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img src="{{ asset('storage/' . $berita->image) }}" class="w-full max-h-[350px] object-cover"
                                alt="research">
                            <ul class="news-date1">
                                <li> {{ Carbon\Carbon::parse($berita->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F') }}
                                </li>
                                <li>{{ Carbon\Carbon::parse($berita->created_at)->format('Y') }}</li>
                            </ul>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $berita->title }}</a></h2>
                        <ul class="title-bar-high news-comments">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Oleh</span>
                                    Admin</a></li>
                            <li><a href="#"><i class="fa fa-tags"
                                        aria-hidden="true"></i>{{ $berita->category->name }}</a></li>
                        </ul>
                        <p> {!! $berita->content !!} </p>
                        <ul class="news-social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-4 md:col-span-3">
                <div class="sidebar-box">
                    <div class="sidebar-box-inner">
                        <h3 class="sidebar-title">Kategori</h3>
                        <ul class="sidebar-categories">
                            @if (count($kategori) < 1)
                                <li>Tidak ada kategori</li>
                            @else
                                @foreach ($kategori as $kategoris)
                                    <li><a href=""> {{ $kategoris->name }} </a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="sidebar-box-inner">
                        <h3 class="sidebar-title">Berita Lain</h3>
                        <div class="sidebar-latest-research-area">
                            <ul>
                                @if (count($beritalain) == 0)
                                    <p>Tidak ada berita lain</p>
                                @else
                                    @foreach ($beritalain as $berita)
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="{{ route('detail-berita', $berita->slug) }}"><img
                                                        src="{{ asset('storage/' . $berita->image) }}"
                                                        class="h-[100px] w-[150px] object-cover"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h6> {{ Carbon\Carbon::parse($berita->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y') }}
                                                </h6>
                                                <p style="font-size: 12px">{{ $berita->title }}</p>
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
@endsection
