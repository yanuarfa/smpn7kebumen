@extends('layouts.app')

@section('title')
    Visi dan Misi | SMP N 7 Kebumen
@endsection

@section('content')
    <div class="container py-4 min-h-screen">
        @if ($visimisi)
            <h2 class="pb-2">Visi dan Misi</h2>
            <hr class="pb-4">
            <div class="row about-page1-inner">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-page-content-holder">
                        <div class="content-box">
                            {{-- <h2>VISI</h2> --}}
                            <p>{!! $visimisi->visi !!}</p>
                        </div>
                        <div class="content-box" style="">
                            {{-- <h2>MISI</h2> --}}
                            <p>{!! $visimisi->misi !!}</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="about-page-img-holder">
                  <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
              </div>
          </div> --}}
            </div>
        @else
            <img src="{{ asset('css/main/img/no-data.svg') }}" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        @endif
    </div>
@endsection
