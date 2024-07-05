

<?php $__env->startSection('title'); ?>
    Visi dan Misi | SMP N 7 Kebumen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4 min-h-screen">
        <?php if($visimisi): ?>
            <h2 class="pb-2">Visi dan Misi</h2>
            <hr class="pb-4">
            <div class="row about-page1-inner">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-page-content-holder">
                        <div class="content-box">
                            
                            <p><?php echo $visimisi->visi; ?></p>
                        </div>
                        <div class="content-box" style="">
                            
                            <p><?php echo $visimisi->misi; ?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php else: ?>
            <img src="<?php echo e(asset('css/main/img/no-data.svg')); ?>" class="img-responsive"
                style="object-fit:cover; margin-top:5% !important; display: block;
  margin: 0 auto;">
            <h2 class="text-center">Tidak ada konten</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smp7\resources\views\contents\visimisi.blade.php ENDPATH**/ ?>