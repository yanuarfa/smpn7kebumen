<div id="header2" class="header4-area">
    <div class="header-top-area">
        <div class="container flex justify-between items-center py-1">
            <div class="flex items-center gap-3">
                <img class="" width="40px" src="<?php echo e(asset('css/main/img/logo.png')); ?>" alt="logo" />
                <h4 class="uppercase font-bold text-xl">SMP NEGERI 7 KEBUMEN</h4>
            </div>
            <div class="">
                <ul>
                    <a href="/admin" class="apply-now-btn2">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="main-menu-area bg-primary z-[999]" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/">Beranda</a></li>
                            <li>
                                <a href="#">Tentang
                                    Kami</a>
                                <ul>
                                    <li class="<?php echo e(request()->is('profil-sekolah') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('profil-sekolah')); ?> ">Profil Sekolah</a></li>
                                    <li class="<?php echo e(request()->is('visi-misi') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('visi-misi')); ?>">Visi dan Misi</a></li>
                                    <li class="<?php echo e(request()->is('struktur-organisasi') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('struktur-organisasi')); ?>">Struktur Organisasi</a></li>
                                    <li class="<?php echo e(request()->is('pengajar') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('pengajar')); ?>">Pengajar</a></li>
                                    <li class="<?php echo e(request()->is('sarana-prasarana') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('sarana-prasarana')); ?>">Sarana
                                            Prasarana</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">Pendidikan</a>
                                <ul>
                                    <li class="<?php echo e(request()->is('ekstrakurikuler') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('ekstrakurikuler')); ?>">Ekstrakurikuler</a>
                                    </li>
                                    <li class="<?php echo e(request()->is('prestasi/sekolah') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-sekolah')); ?>">Prestasi Sekolah</a></li>
                                    <li class="<?php echo e(request()->is('prestasi/siswa') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-siswa')); ?>">Prestasi Siswa</a>
                                    </li>
                                    <li class="<?php echo e(request()->is('prestasi/guru') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-guru')); ?>">Prestasi Guru</a>
                                    </li>
                                    <li class="<?php echo e(request()->is('sastra') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('sastra')); ?>">Sastra</a>
                                    </li>
                                    <li class="<?php echo e(request()->is('galeri') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('galeri')); ?>">Galeri</a>
                                    </li>
                                    <li class="<?php echo e(request()->is('unduh') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('unduh')); ?>">Unduh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?php echo e(request()->is('berita') || request()->is('berita/*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('berita')); ?>">Berita</a></li>
                            <li class="<?php echo e(request()->is('alumni') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('alumni')); ?>">Alumni</a></li>

                            <?php if($menu->count() > 0): ?>
                                <li><a href="#">Lainnya</a>
                                    <ul>
                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($m->link_menu); ?>" target="_blank"><?php echo e($m->nama_menu); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li><a href="https://portal.pijarsekolah.id/smpn7kebumen" target="_blank">LMS</a></li>
                            <?php endif; ?>
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
                            <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li class="<?php echo e(request()->is('profil-sekolah') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('profil-sekolah')); ?>">Profil Sekolah</a></li>
                                    <li class="<?php echo e(request()->is('visi-misi') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('visi-misi')); ?>">Visi dan Misi</a></li>
                                    <li class="<?php echo e(request()->is('struktur-organisasi') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('struktur-organisasi')); ?>">Struktur Organisasi</a></li>
                                    <li class="<?php echo e(request()->is('pengajar') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('pengajar')); ?>">Pengajar</a></li>
                                    <li class="<?php echo e(request()->is('sarana-prasarana') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('sarana-prasarana')); ?>">Sarana Prasarana</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pendidikan</a>
                                <ul>
                                    <li class="<?php echo e(request()->is('ekstrakurikuler') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('ekstrakurikuler')); ?>">Ekstrakurikuler</a></li>
                                    <li class="<?php echo e(request()->is('prestasi/sekolah') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-sekolah')); ?>">Prestasi Sekolah</a></li>
                                    <li class="<?php echo e(request()->is('prestasi/siswa') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-siswa')); ?>">Prestasi Siswa</a></li>
                                    <li class="<?php echo e(request()->is('prestasi/guru') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('prestasi-guru')); ?>">Prestasi Guru</a></li>
                                    <li class="<?php echo e(request()->is('sastra') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('sastra')); ?>">Sastra</a></li>
                                    <li class="<?php echo e(request()->is('galeri') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('galeri')); ?>">Galeri</a></li>
                                    <li class="<?php echo e(request()->is('unduh') ? 'active' : ''); ?>"><a
                                            href="<?php echo e(route('unduh')); ?>">Unduh</a></li>
                                </ul>
                            </li>
                            <li class="<?php echo e(request()->is('berita') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('berita')); ?>">Berita</a>
                            </li>
                            <li class="<?php echo e(request()->is('alumni') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('alumni')); ?>">Alumni</a>
                            </li>


                            <?php if($menu->count() > 0): ?>
                                <li><a href="#">Lainnya</a>
                                    <ul>
                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($m->link_menu); ?>" target="_blank"><?php echo e($m->nama_menu); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li><a href="https://portal.pijarsekolah.id/smpn7kebumen" target="_blank">LMS</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End -->
<?php /**PATH C:\laragon\www\smp7\resources\views\includes\header.blade.php ENDPATH**/ ?>