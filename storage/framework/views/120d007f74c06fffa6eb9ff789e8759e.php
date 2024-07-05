

<?php $__env->startSection('title'); ?>
    <?php echo e($berita->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-8">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-8 md:col-span-9">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img src="<?php echo e(asset('storage/' . $berita->image)); ?>" class="w-full max-h-[350px] object-cover"
                                alt="research">
                            <ul class="news-date1">
                                <li> <?php echo e(Carbon\Carbon::parse($berita->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F')); ?>

                                </li>
                                <li><?php echo e(Carbon\Carbon::parse($berita->created_at)->format('Y')); ?></li>
                            </ul>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#"><?php echo e($berita->title); ?></a></h2>
                        <ul class="title-bar-high news-comments">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Oleh</span>
                                    Admin</a></li>
                            <li><a href="#"><i class="fa fa-tags"
                                        aria-hidden="true"></i><?php echo e($berita->category->name); ?></a></li>
                        </ul>
                        <p> <?php echo $berita->content; ?> </p>
                        <ul class="news-social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-4 md:col-span-3">
                <div class="sidebar-box">
                    <div class="sidebar-box-inner">
                        <h3 class="sidebar-title">Kategori</h3>
                        <ul class="sidebar-categories">
                            <?php if(count($kategori) < 1): ?>
                                <li>Tidak ada kategori</li>
                            <?php else: ?>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategoris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href=""> <?php echo e($kategoris->name); ?> </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="sidebar-box-inner">
                        <h3 class="sidebar-title">Berita Lain</h3>
                        <div class="sidebar-latest-research-area">
                            <ul>
                                <?php if(count($beritalain) == 0): ?>
                                    <p>Tidak ada berita lain</p>
                                <?php else: ?>
                                    <?php $__currentLoopData = $beritalain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="<?php echo e(route('detail-berita', $berita->slug)); ?>"><img
                                                        src="<?php echo e(asset('storage/' . $berita->image)); ?>"
                                                        class="h-[100px] w-[150px] object-cover"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h6> <?php echo e(Carbon\Carbon::parse($berita->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y')); ?>

                                                </h6>
                                                <p style="font-size: 12px"><?php echo e($berita->title); ?></p>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\detailberita.blade.php ENDPATH**/ ?>