

<?php $__env->startSection('title'); ?>
    <?php echo e($ekstrakurikuler->nama); ?> | SMPN 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="news-details-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row news-details-page-inner">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="news-img-holder">
                                <img src="<?php echo e(asset('storage/' . $ekstrakurikuler->gambar)); ?>"
                                    class="w-full max-h-[500px] object-contain" alt="research">
                                <ul class="news-date1">
                                    <li><?php echo e(Carbon\Carbon::parse($ekstrakurikuler->created_at)->format('d M')); ?></li>
                                    <li><?php echo e(Carbon\Carbon::parse($ekstrakurikuler->created_at)->format('Y')); ?></li>
                                </ul>
                            </div>
                            <h2 class="title-default-left-bold-lowhight"><a href="#"><?php echo e($ekstrakurikuler->nama); ?></a>
                            </h2>
                            <ul class="title-bar-high news-comments">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Oleh</span>
                                        Admin</a></li>
                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Ekstrakurikuler</a></li>
                            </ul>
                            <p> <?php echo $ekstrakurikuler->deskripsi; ?> </p>
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
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\detailekstrakurikuler.blade.php ENDPATH**/ ?>