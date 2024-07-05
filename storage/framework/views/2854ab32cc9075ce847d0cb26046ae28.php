

<?php $__env->startSection('title'); ?>
    Struktur Organisasi | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4 min-h-screen">
        <div class="grid">
            <div>
                <?php if(count($strukturorganisasi) > 0): ?>
                    <h1 class="pb-2">Struktur Organisasi</h1>
                    <hr class="pb-2">
                    <?php $__currentLoopData = $strukturorganisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $str): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <div class="content-box" style="">
                                <div class="pb-4">
                                    <h3 style="margin: 0"><?php echo e($str->judul_struktur); ?></h3>
                                    <p style="margin: 0"><?php echo e($str->deskripsi_struktur); ?></p>
                                </div>
                                
                                <img src="<?php echo e(asset('storage/' . $str->gambar_struktur)); ?>" alt="Struktur Organisasi"
                                    class="img-fluid">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                        style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
                    <h2 class="text-center">Tidak ada konten</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\strukturorganisasi.blade.php ENDPATH**/ ?>