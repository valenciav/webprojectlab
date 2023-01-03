<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>My Profile</h1>
        <h4><?php echo e(Auth::user()->role); ?></h4>
        <h3>Username: <?php echo e(Auth::user()->username); ?></h3>
        <p>Email: <?php echo e(Auth::user()->email); ?></p>
        <p>Address: <?php echo e(Auth::user()->address); ?></p>
        <p>Phone: <?php echo e(Auth::user()->phone_number); ?></p>
        <div class="btn-wrap">
            <?php if(Auth::user()->role != 'admin'): ?>
                <a href="/editprofile" class="btn">Edit Profile</a>
            <?php endif; ?>
            <a href="/editpassword" class="btn">Edit Password</a>
        </div>
    </div>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/profile.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/profile.blade.php ENDPATH**/ ?>