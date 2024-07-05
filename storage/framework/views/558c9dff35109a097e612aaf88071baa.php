

<?php $__env->startSection('title'); ?>
    Berita | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-8">
        <h1 class="pb-4">Berita</h1>
        <div class="grid grid-cols-12 gap-4">
            
            <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9">
                <div class="grid gap-4 grid-cols-12">
                    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="col-span-12 md:col-span-6">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="<?php echo e(asset('storage/' . $beritas->image)); ?>" class="w-full h-[200px] object-cover"
                                        alt="research">
                                    <ul class="news-date2">
                                        <li> <?php echo e(Carbon\Carbon::parse($beritas->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F')); ?>

                                        </li>
                                        <li><?php echo e(Carbon\Carbon::parse($beritas->created_at)->format('Y')); ?></li>
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold line-clamp-2"><a
                                        href="<?php echo e(route('detail-berita', $beritas->slug)); ?>"><?php echo e($beritas->title); ?></a>
                                </h3>
                                <ul class="title-bar-high news-comments">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>
                                            Admin</a></li>
                                    <li><a href="#"><i class="fa fa-tags"
                                                aria-hidden="true"></i><?php echo e($beritas->category->name); ?></a>
                                    </li>
                                    <li>
                                        <span class="line-clamp-3"><?php echo e($beritas->description); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($berita) == 0): ?>
                        <div class="col-span-12 md:col-span-6 lg:col-span-8">
                            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                                style="object-fit:cover; margin-top:5% !important; display: block; margin: 0 auto;">
                            <h2 class="text-center">Tidak ada artikel</h2>
                        </div>
                    <?php endif; ?>
                </div>
                <?php echo e($berita->links('contents.pagination')); ?>

            </div>
            <div class="col-span-12 sm:col-span-4 md:col-span-3">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori</h3>
                            <ul class="sidebar-categories">
                                <?php if(count($kategori) < 1): ?>
                                    <li>Tidak ada kategori</li>
                                <?php else: ?>
                                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href=""> <?php echo e($kt->name); ?> </a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Berita Terbaru</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    <?php if(count($berita) < 1): ?>
                                        <li>Tidak ada berita lain</li>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="latest-research-img">
                                                    <a href="<?php echo e($beritas->slug); ?>"><img
                                                            src="<?php echo e(asset('storage/' . $beritas->image)); ?>"
                                                            class="img-responsive" alt="skilled"></a>
                                                </div>
                                                <div class="latest-research-content">
                                                    <h6> <?php echo e(Carbon\Carbon::parse($beritas->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y')); ?>

                                                    </h6>
                                                    <p style="font-size: 12px"><?php echo e($beritas->title); ?></p>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\berita.blade.php ENDPATH**/ ?>