

<?php $__env->startSection('title'); ?>
    Profil Sekolah | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4 min-h-screen">
        <?php if($profilsekolah): ?>
            <div>
                <h1 class="pb-2">Profil Sekolah</h1>
                <hr class="pb-4">
                <img src="<?php echo e(asset('storage/' . $profilsekolah->profil_cover)); ?>" class="img-responsive"
                    style="max-height:500px; width:100%; object-fit:cover">
            </div>
            
            <span><?php echo $profilsekolah->profil_sekolah; ?></span>
        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\profilsekolah.blade.php ENDPATH**/ ?>