

<?php $__env->startSection('title'); ?>
    Unduh | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4">
        <?php if(count($unduh)): ?>
            <h1 class="pb-4">Unduh</h1>
            <div class="w-full">
                <table class="table-auto border-spacing-2 w-full border-collapse border">
                    <tr class="*:border *:text-left *:px-4">
                        <th class="w-8">No</th>
                        <th>Nama File</th>
                        <th>Diunggah pada</th>
                        <th>Unduh</th>
                    </tr>

                    <?php $__currentLoopData = $unduh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="*:border *:text-left *:px-4 *:h-12 *:py-2">
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama_file); ?></td>
                            <td><?php echo e($item->created_at); ?></td>
                            <td><a href="<?php echo e(route('download', $item->id)); ?>"
                                    class="bg-yellow-400 hover:bg-blue-900 hover:text-white px-4 py-2 transition duration-200">Unduh</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\unduh.blade.php ENDPATH**/ ?>