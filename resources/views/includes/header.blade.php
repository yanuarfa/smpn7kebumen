<div id="header2" class="header4-area">
    <div class="header-top-area">
        <div class="container flex justify-between items-center py-1">
            <div class="flex items-center gap-3">
                <img class="" width="40px" src="{{ asset('css/main/img/logo.png') }}" alt="logo" />
                <h4 class="uppercase font-bold text-xl">SMP NEGERI 7 KEBUMEN</h4>
            </div>
            <div class="">
                <ul>
                    <a href="/admin" class="apply-now-btn2">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <div class="w-full bg-red-600">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left"
                        style="display: flex; align-items: center; -webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;">
                        <div class="logo-area" style="margin-right: 10px">
                            <img class="img-responsive" width="40px" src="{{ asset('css/main/img/logo.png') }}"
                                alt="logo" />
                        </div>
                        <h4 style="margin: 0; font-weight: bold; text-transform: uppercase;">SMP NEGERI 7 KEBUMEN</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <a href="/admin" class="apply-now-btn2">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="main-menu-area bg-primary z-[999]" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                            <li>
                                <a href="#">Tentang
                                    Kami</a>
                                <ul>
                                    <li class="{{ request()->is('profil-sekolah') ? 'active' : '' }}"><a
                                            href="{{ route('profil-sekolah') }} ">Profil Sekolah</a></li>
                                    <li class="{{ request()->is('visi-misi') ? 'active' : '' }}"><a
                                            href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                                    <li class="{{ request()->is('struktur-organisasi') ? 'active' : '' }}"><a
                                            href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                    <li class="{{ request()->is('pengajar') ? 'active' : '' }}"><a
                                            href="{{ route('pengajar') }}">Pengajar</a></li>
                                    <li class="{{ request()->is('sarana-prasarana') ? 'active' : '' }}"><a
                                            href="{{ route('sarana-prasarana') }}">Sarana
                                            Prasarana</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">Pendidikan</a>
                                <ul>
                                    <li class="{{ request()->is('ekstrakurikuler') ? 'active' : '' }}"><a
                                            href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
                                    </li>
                                    <li class="{{ request()->is('prestasi/sekolah') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-sekolah') }}">Prestasi Sekolah</a></li>
                                    <li class="{{ request()->is('prestasi/siswa') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-siswa') }}">Prestasi Siswa</a>
                                    </li>
                                    <li class="{{ request()->is('prestasi/guru') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-guru') }}">Prestasi Guru</a>
                                    </li>
                                    <li class="{{ request()->is('sastra') ? 'active' : '' }}"><a
                                            href="{{ route('sastra') }}">Sastra</a>
                                    </li>
                                    <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a
                                            href="{{ route('galeri') }}">Galeri</a>
                                    </li>
                                    <li class="{{ request()->is('unduh') ? 'active' : '' }}"><a
                                            href="{{ route('unduh') }}">Unduh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('berita') || request()->is('berita/*') ? 'active' : '' }}"><a
                                    href="{{ route('berita') }}">Berita</a></li>
                            <li class="{{ request()->is('alumni') ? 'active' : '' }}"><a
                                    href="{{ route('alumni') }}">Alumni</a></li>

                            @if ($menu->count() > 0)
                                <li><a href="#">Lainnya</a>
                                    <ul>
                                        @foreach ($menu as $m)
                                            <li><a href="{{ $m->link_menu }}" target="_blank">{{ $m->nama_menu }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="https://portal.pijarsekolah.id/smpn7kebumen" target="_blank">LMS</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li class="{{ request()->is('profil-sekolah') ? 'active' : '' }}"><a
                                            href="{{ route('profil-sekolah') }}">Profil Sekolah</a></li>
                                    <li class="{{ request()->is('visi-misi') ? 'active' : '' }}"><a
                                            href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                                    <li class="{{ request()->is('struktur-organisasi') ? 'active' : '' }}"><a
                                            href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                    <li class="{{ request()->is('pengajar') ? 'active' : '' }}"><a
                                            href="{{ route('pengajar') }}">Pengajar</a></li>
                                    <li class="{{ request()->is('sarana-prasarana') ? 'active' : '' }}"><a
                                            href="{{ route('sarana-prasarana') }}">Sarana Prasarana</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pendidikan</a>
                                <ul>
                                    <li class="{{ request()->is('ekstrakurikuler') ? 'active' : '' }}"><a
                                            href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                                    <li class="{{ request()->is('prestasi/sekolah') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-sekolah') }}">Prestasi Sekolah</a></li>
                                    <li class="{{ request()->is('prestasi/siswa') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-siswa') }}">Prestasi Siswa</a></li>
                                    <li class="{{ request()->is('prestasi/guru') ? 'active' : '' }}"><a
                                            href="{{ route('prestasi-guru') }}">Prestasi Guru</a></li>
                                    <li class="{{ request()->is('sastra') ? 'active' : '' }}"><a
                                            href="{{ route('sastra') }}">Sastra</a></li>
                                    <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a
                                            href="{{ route('galeri') }}">Galeri</a></li>
                                    <li class="{{ request()->is('unduh') ? 'active' : '' }}"><a
                                            href="{{ route('unduh') }}">Unduh</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('berita') ? 'active' : '' }}"><a
                                    href="{{ route('berita') }}">Berita</a>
                            </li>
                            <li class="{{ request()->is('alumni') ? 'active' : '' }}"><a
                                    href="{{ route('alumni') }}">Alumni</a>
                            </li>


                            @if ($menu->count() > 0)
                                <li><a href="#">Lainnya</a>
                                    <ul>
                                        @foreach ($menu as $m)
                                            <li><a href="{{ $m->link_menu }}" target="_blank">{{ $m->nama_menu }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="https://portal.pijarsekolah.id/smpn7kebumen" target="_blank">LMS</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End -->
