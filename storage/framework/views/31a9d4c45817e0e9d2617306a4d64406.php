

<?php $__env->startSection('title'); ?>
    Pengajar | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4">
        <?php if($pengajar->count() > 0): ?>
            <h1 class="pb-1">Pengajar</h1>
            <hr class="pb-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <?php $__currentLoopData = $pengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-4 shadow h-full overflow-hidden">
                        <img src="<?php echo e(asset('storage/' . $p->foto)); ?>" alt="<?php echo e($p->nama); ?>"
                            class="w-full object-cover pb-2">
                        <div class="flex flex-col justify-between h-[160px]">
                            <h4 class="text-center line-clamp-2 text-gray-950"><?php echo e($p->nama); ?></h4>
                            <p class="text-center">Guru <?php echo e($p->bidang); ?></p>
                            <div class="flex flex-col justify-center items-center">
                                <ul class="flex gap-2 pt-2 *:bg-[#fdc800] *:px-2 *:py-1">
                                    <li><a href="" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="mailto:<?php echo e($p->email); ?>"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($pengajar->links('contents.pagination')); ?>

        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
    margin: 0 auto;">
            <h2 class="text-center">Tidak ada pengajar</h2>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\pengajar.blade.php ENDPATH**/ ?>