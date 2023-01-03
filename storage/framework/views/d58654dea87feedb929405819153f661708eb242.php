<?php $__env->startSection('content'); ?>
    <form id = "searchbar">
        <input type = "text" name="searchquery" class = "searchbar" placeholder="Search">
        <button type = "submit" class = "search"></button>
    </form>
    <?php echo $__env->make('core_page.subhomecontent.catalogueview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/search.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/search.blade.php ENDPATH**/ ?>