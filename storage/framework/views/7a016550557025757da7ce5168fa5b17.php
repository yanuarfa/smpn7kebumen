

<?php $__env->startSection('title'); ?>
    Ekstrakurikuler | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4">
        <div>
            <?php if(count($ekstrakurikuler)): ?>
                <h2 class="pb-4">Daftar Ekstrakurikuler</h2>
                <?php $__currentLoopData = $ekstrakurikuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3" style="margin: 20px 0; padding: 20px">
                        <div class="grid gap-4 grid-cols-12 no-gutters">
                            <div class="col-md-4 col-span-4">
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" class="w-full h-[200px] object-contain"
                                    alt="<?php echo e($item->nama); ?>">
                            </div>
                            <div class="col-md-8 col-span-8">
                                <div class="card-body">
                                    <h2 class="card-title" style="margin: 0"><a
                                            style="color: #00256b; text-decoration: none; font-weight: bold;"
                                            href="<?php echo e(route('detail-ekstrakurikuler', $item->slug)); ?>"><?php echo e($item->nama); ?></a>
                                    </h2>
                                    <p class="card-text" style="margin: 0">
                                        oleh Admin<span> | </span><?php echo e($item->nama); ?>

                                    </p>
                                    <p class="card-text" style="margin: 0"><small
                                            class="text-muted"><?php echo e($item->created_at); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\ekstrakurikuler.blade.php ENDPATH**/ ?>