

<?php $__env->startSection('title'); ?>
    Alumni | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4 grid gap-8 grid-cols-12">
        <div class="col-span-12 lg:col-span-8">
            <h1 class="pb-1">Alumni</h1>
            <hr class="pb-4">
            <?php if($alumni->count() > 0): ?>
                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <?php $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="shadow p-4">
                            <img src="<?php echo e(asset('storage/' . $a->foto)); ?>" alt="<?php echo e($a->nama); ?>"
                                class="h-[200px] w-full object-cover">
                            <h2 class="text-lg font-semibold line-clamp-2"><?php echo e($a->nama); ?></h2>
                            <p class="text-sm text-gray-500"><?php echo e($a->angkatan); ?></p>
                            <p class="text-sm text-gray-500"><?php echo e($a->pekerjaan); ?></p>
                            <p class="text-sm text-gray-500 pb-4"><?php echo e($a->pesan); ?></p>
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
        <div class="col-span-12 lg:col-span-4">
            <h1 class="pb-1">Kirim Pesan</h1>
            <hr class="pb-4">
            <form action="<?php echo e(route('upload-alumni')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama" required />
                </div>
                <div class="mb-5">
                    <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900">Angkatan</label>
                    <input type="number" id="angkatan" name="angkatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Angkatan" required />
                </div>
                <div class="mb-5">
                    <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Pekerjaan" required />
                </div>
                <div class="mb-5">
                    <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Unggah Foto</label>
                    <input type="file" id="foto" name="foto" accept="image/png, image/jpeg, image/jpg"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required />
                </div>
                <div class="mb-5">
                    <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                    <textarea id="pesan" rows="4" name="pesan" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Pesan anda..."></textarea>
                </div>
                <button type="submit"
                    class="bg-yellow-400 hover:bg-blue-900 hover:text-white transition-colors duration-200 py-2 px-4">Kirim
                    Pesan</button>
            </form>
            <?php if(session('success')): ?>
                <div class="w-full p-2 bg-green-400/15 mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\alumni.blade.php ENDPATH**/ ?>