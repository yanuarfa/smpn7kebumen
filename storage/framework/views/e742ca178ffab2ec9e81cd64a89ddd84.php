

<?php $__env->startSection('title'); ?>
    Galeri | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen pt-4 pb-8">
        <?php if($galeri->count() > 0): ?>
            <h1 class="pb-2">Galeri</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white shadow-md p-3">
                        <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" alt="<?php echo e($item->deskripsi_foto); ?>"
                            class="w-full h-48 object-cover">
                        <p class="text-sm text-gray-500 line-clamp-5 text-center"><?php echo e($item->deskripsi_foto); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
            <h2 class="text-center">Tidak ada foto</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\galeri.blade.php ENDPATH**/ ?>