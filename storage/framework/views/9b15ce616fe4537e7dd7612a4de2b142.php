

<?php $__env->startSection('title'); ?>
    Sarana & Prasarana | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4">
        <?php if($saranaprasarana->count() > 0): ?>
            <h1 class="pb-1">Sarana Prasarana</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php $__currentLoopData = $saranaprasarana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white shadow-md p-3">
                        <img src="<?php echo e(asset('storage/' . $item->file_gambar)); ?>" alt="<?php echo e($item->nama); ?>"
                            class="w-full h-48 object-cover">
                        <h2 class="text-lg font-semibold mt-2"><?php echo e($item->nama); ?></h2>
                        <p class="text-sm text-gray-500 line-clamp-5"><?php echo $item->deskripsi; ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\saranaprasarana.blade.php ENDPATH**/ ?>