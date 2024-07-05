@extends('layouts.app')

@section('title')
    Profil Sekolah | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container py-4 min-h-screen">
        @if ($profilsekolah)
            <div>
                <h1 class="pb-2">Profil Sekolah</h1>
                <hr class="pb-4">
                <img src="{{ asset('storage/' . $profilsekolah->profil_cover) }}" class="img-responsive"
                    style="max-height:500px; width:100%; object-fit:cover">
            </div>
            {{-- <h2 class="title-center">{{$profile->title}}</h2>
      <p class="sub-title-full-width">{{$profile->content}}</p> --}}
            <span>{!! $profilsekolah->profil_sekolah !!}</span>
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        @endif
    </div>
@endsection
