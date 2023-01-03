<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/home.css')); ?>" />
    <div class="intro">
        <h1 class="MaiBoutique-header">
            <span class="MaiBoutique welcome">
                Welcome
            </span><br><span class="MaiBoutique" id="subtitle">
                <?php if(auth()->guard()->check()): ?>
                    <?php echo e(Auth::user()->username); ?>

                <?php endif; ?>
            </span>
        </h1>
    </div>
    <script src="<?php echo e(URL::asset('js/homepage.js')); ?>"></script>
    <?php echo $__env->make('core_page.subhomecontent.catalogueview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/home.blade.php ENDPATH**/ ?>