

<?php $__env->startSection('title'); ?>
    Sastra | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container min-h-screen py-4 grid gap-8 grid-cols-12">
        <div class="col-span-12 lg:col-span-8">
            <h1 class="pb-1">Sastra</h1>
            <hr class="pb-4">
            <?php if($sastra->count() > 0): ?>
                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <?php $__currentLoopData = $sastra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-4 shadow">
                            <img src="<?php echo e(asset('storage/' . $s->file_karya)); ?>" alt="<?php echo e($s->judul); ?>"
                                class="h-[200px] w-full object-cover">
                            <h2 class="text-lg font-semibold line-clamp-2"><?php echo e($s->judul); ?></h2>
                            <p class="text-sm text-gray-500"><?php echo e($s->nama_pengguna); ?></p>
                            <p class="text-sm text-gray-500"><?php echo e($s->sosial_media); ?></p>
                            <p class="text-sm text-gray-500">
                                <?php echo e(Carbon\Carbon::parse($s->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y')); ?>

                            </p>
                            <p class="text-sm text-gray-500 pb-4"><?php echo e($s->deskripsi); ?></p>
                            <a href="<?php echo e(asset('storage/' . $s->file_karya)); ?>" target="_blank"
                                class="mt-4 py-2 px-4 bg-yellow-400 hover:bg-blue-900 hover:text-white transition-colors duration-200">Lihat
                                Karya</a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                    style="object-fit:cover; margin-top:5% !important; display: block;
margin: 0 auto;">
                <h2 class="text-center">Tidak ada karya</h2>
            <?php endif; ?>

        </div>
        <div class="col-span-12 lg:col-span-4">
            <h1 class="pb-1">Unggah Karya</h1>
            <hr class="pb-4">
            <form action="<?php echo e(route('upload-sastra')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama_pengguna"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama" required />
                </div>
                <div class="mb-5">
                    <label for="sosialmedia" class="block mb-2 text-sm font-medium text-gray-900">Sosial Media</label>
                    <input type="text" id="sosialmedia" name="sosial_media"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Sosial Media" required />
                </div>
                <div class="mb-5">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Karya</label>
                    <input type="text" id="judul" name="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Judul Karya" required />
                </div>
                <div class="mb-5">
                    <label for="filekarya" class="block mb-2 text-sm font-medium text-gray-900">Unggah File Karya</label>
                    <input type="file" id="filekarya" name="file_karya"
                        accept="image/png, image/jpeg, image/jpg, image/svg+xml, image/webp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required />
                </div>
                <div class="mb-5">
                    <label for="deskripsikarya"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Karya</label>
                    <textarea id="deskripsikarya" rows="4" name="dekripsi_karya"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Deskripsi karya anda..."></textarea>
                </div>
                <button type="submit"
                    class="bg-yellow-400 hover:bg-blue-900 hover:text-white transition-colors duration-200 py-2 px-4">Unggah
                    Karya</button>
            </form>
            <?php if(session('success')): ?>
                <div class="w-full p-2 bg-green-400/15 mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\sastra.blade.php ENDPATH**/ ?>