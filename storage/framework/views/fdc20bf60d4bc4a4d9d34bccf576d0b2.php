

<?php $__env->startSection('title'); ?>
    Beranda | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div style="min-height: 100vh; position: relative;">
        <section class="w-full">
            <?php if($sampul->count() > 0): ?>
                <div class="relative w-full" data-carousel="slide">
                    <div class="relative h-[200px] overflow-hidden sm:h-[300px] md:h-[400px] lg:h-[600px] group">
                        <?php $__currentLoopData = $sampul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="<?php echo e(asset('storage/' . $s->file_sampul)); ?>"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="<?php echo e($s->deskripsi_sampul); ?>">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($sampul->count() !== 1): ?>
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Selanjutnya</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Sebelumnya</span>
                                </span>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <img src="<?php echo e(asset('css/main/img/smpn7kebumen.jpeg')); ?>" alt="banner"
                        style="width: 100%; height: 500px; object-fit: cover">
            <?php endif; ?>
        </section>
        <section class="py-12 min-h-[500px] bg-slate-50">
            <div class="container">
                <div>
                    <?php if($kepalasekolah): ?>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="place-self-center md:place-self-start p-6 border col-span-1 max-w-[400px]">
                                <img src="<?php echo e(asset('storage/' . $kepalasekolah->foto)); ?>" alt="<?php echo e($kepalasekolah->nama); ?>"
                                    class="w-[400px] h-[500px] object-cover overflow-hidden mb-2">
                                <h3 class="text-center"><?php echo e($kepalasekolah->nama); ?></h3>
                                <p class="text-center"><?php echo e($kepalasekolah->jabatan); ?></p>
                            </div>
                            <div class="col-span-2">
                                <h2 class="pb-4 text-center md:text-left">Selamat Datang</h2>
                                <p class="pb-4">Assalamualaikum Warahmatullahi Wabarakatuh,</p>
                                <p class="pb-4">
                                    Puji syukur kehadirat Allah SWT atas hadirnya website profil SMP Negeri 7 Kebumen.
                                    Website
                                    ini hadir untuk memberikan informasi komprehensif tentang sekolah kami, termasuk
                                    profil sekolah, visi dan misi, program unggulan, dan prestasi.
                                </p>
                                <p class="pb-4">Kami harap website ini menjadi media komunikasi yang efektif dan
                                    bermanfaat bagi
                                    semua pihak. Kritik dan saran untuk penyempurnaan website ini sangat kami harapkan.
                                </p>
                                <p>Wassalamualaikum Warahmatullahi Wabarakatuh,</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <h2 class="text-center pb-4">Selamat Datang</h2>
                        <p class="pb-4">Website ini merupakan wujud komitmen kami untuk menyediakan informasi yang lengkap
                            dan terkini
                            mengenai berbagai kegiatan, program, dan prestasi yang ada di SMP Negeri 7 Kebumen. Kami
                            berharap platform ini dapat menjadi jendela bagi masyarakat untuk melihat lebih dekat perjalanan
                            pendidikan di sekolah kami.</p>
                        <p class="pb-4">SMP Negeri 7 Kebumen selalu berupaya untuk memberikan pendidikan yang terbaik,
                            baik dalam bidang
                            akademik maupun non-akademik. Dengan dukungan fasilitas yang memadai, tenaga pengajar yang
                            berkompeten, serta program-program unggulan yang inovatif, kami bertekad untuk mencetak generasi
                            yang cerdas, berkarakter, dan peduli terhadap lingkungan.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="py-12 min-h-[500px]">
            <div class="container">
                <h1 class="text-center pb-4">Berita Terbaru</h1>
                <div>
                    <?php if($berita->count() > 0): ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="p-4 border shadow col-span-1 min-h-full w-full overflow-hidden place-self-center">
                                    <div class="overflow-hidden mb-2 relative h-[200px] max-h-[250px] w-full">
                                        <img src="<?php echo e(asset('storage/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>"
                                            class="h-full w-full object-cover">
                                        <div class="absolute left-0 bottom-0 bg-yellow-400 p-2">
                                            <?php echo e($item->category->name); ?>

                                        </div>
                                    </div>
                                    <h3 class="pb-2"><a class="color-default line-clamp-2"
                                            href="<?php echo e(route('detail-berita', $item->slug)); ?>"><?php echo e($item->title); ?></a></h3>

                                    <p class="line-clamp-3"><?php echo e($item->description); ?></p>
                                    <div class="flex justify-between items-center pt-3">
                                        <ul class="flex gap-2">
                                            <li><a href="#" class="color-default"><i class="fa fa-user"
                                                        aria-hidden="true"></i>
                                                    Admin</a></li>
                                            <li><a href="#" class="color-default"><i class="fa fa-tags"
                                                        aria-hidden="true"></i><?php echo e($item->category->name); ?></a>
                                            </li>
                                        </ul>
                                        <p class="pb-2"><?php echo e($item->created_at->format('d F Y')); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="flex items-center justify-center pt-6">
                            <a href="<?php echo e(route('berita')); ?>"
                                class="bg-yellow-400 hover:bg-blue-900 hover:text-white px-4 py-2 transition duration-200">Lihat
                                Selengkapnya</a>
                        </div>
                    <?php else: ?>
                        <div class="flex items-center justify-center flex-col pt-6">
                            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="h-[300px]">
                            <h4 class="text-center">Tidak ada berita</h4>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="bg-slate-100 py-12 min-h-[500px]">
            <div class="container">
                <h2 class="text-center pb-4">Tenaga Pengajar</h2>
                <?php if($pengajar->count() > 0): ?>
                    <div class="rc-carousel" data-smart-speed="2000" data-autoplay="true" data-dots="true">
                        <?php $__currentLoopData = $pengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-4 bg-white h-[350px] max-w-[200px]">
                                <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" alt=""
                                    class="w-[100px] h-[180px] object-cover pb-1">
                                <h4 class="text-center line-clamp-2"><?php echo e($item->nama); ?></h4>
                                <p class="text-center">Guru <?php echo e($item->bidang); ?></p>
                                <div class="flex items-center flex-col">
                                    <ul class="flex gap-2 pt-2 *:bg-yellow-400 *:px-2 *:py-1">
                                        <li><a href="" target="_blank"><i class="fa fa-globe"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="mailto:<?php echo e($item->email); ?>"><i class="fa fa-envelope-o"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="flex items-center justify-center pt-6">
                        <a href="<?php echo e(route('pengajar')); ?>"
                            class="bg-yellow-400 hover:bg-blue-900 hover:text-white px-4 py-2 transition duration-200">Lihat
                            Selengkapnya</a>
                    </div>
                <?php else: ?>
                    <div class="flex items-center justify-center flex-col pt-6">
                        <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="h-[300px]">
                        <h4 class="text-center">Tidak ada pengajar</h4>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <section class="lokasi">
            <div class="container">
                <h1 class="text-center pb-4">Lokasi Sekolah</h1>
                <div
                    style="padding: 10px; box-shadow: 2px 12px 34px -17px rgba(0,0,0,0.53);
    -webkit-box-shadow: 2px 12px 34px -17px rgba(0,0,0,0.53);
    -moz-box-shadow: 2px 12px 34px -17px rgba(0,0,0,0.53); background-color: white">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d349.50013415906295!2d109.65582748264282!3d-7.667810210602399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aca071798680b%3A0x81cb5155c198011!2sSMP%20Negeri%207%20Kebumen!5e0!3m2!1sen!2sid!4v1718723139066!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views/contents/beranda.blade.php ENDPATH**/ ?>