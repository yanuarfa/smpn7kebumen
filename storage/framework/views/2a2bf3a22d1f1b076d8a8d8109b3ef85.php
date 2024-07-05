

<?php $__env->startSection('title'); ?>
    Prestasi <?php echo e($kategoriprestasi); ?> | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4">
        <div>
            <?php if(count($prestasi)): ?>
                <h2 class="pb-2">Daftar Prestasi <?php echo e($kategoriprestasi); ?></h2>
                <hr class="pb-4">
                <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-4">
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>"
                                    class="w-full h-[100px] lg:h-full object-cover" alt="<?php echo e($item->nama_prestasi); ?>">
                            </div>
                            <div class="col-span-8">
                                <div class="card-body">
                                    <h2 class="card-title"><a
                                            style="color: #00256b; text-decoration: none; font-weight: bold;"
                                            href="<?php if($kategoriprestasi == 'Siswa'): ?> <?php echo e(route('detail-prestasi-siswa', $item->slug)); ?>

                                            <?php elseif($kategoriprestasi == 'Guru'): ?>
                                                <?php echo e(route('detail-prestasi-guru', $item->slug)); ?>

                                            <?php else: ?>
                                                <?php echo e(route('detail-prestasi-sekolah', $item->slug)); ?> <?php endif; ?>"><?php echo e($item->nama_prestasi); ?></a>
                                    </h2>
                                    <p class="card-text" style="margin: 0">
                                        <?php echo e($item->jenisprestasi->nama); ?><span> | </span><?php echo e($item->tingkatprestasi->nama); ?>

                                    </p>
                                    <p class="card-text" style="margin: 0"><?php echo e($item->kategori); ?></p>
                                    <p class="card-text" style="margin: 0"><small
                                            class="text-muted"><?php echo e(Carbon\Carbon::parse($item->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y')); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                    style="object-fit:cover; margin-top:5% !important; display: block;
    margin: 0 auto;">
                <h2 class="text-center">Tidak ada prestasi</h2>
            <?php endif; ?>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\prestasi.blade.php ENDPATH**/ ?>