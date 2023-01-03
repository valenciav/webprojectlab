<?php $__env->startSection('content'); ?>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/editprofile.css')); ?>">
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <div class="background">
        <div class="edit">
            <div class="banner">Edit Profile</div>
            <div class="edit-template">
                <form id="form" action="/editprofile" method="POST">
                    <?php echo csrf_field(); ?>

                    <label for="username" class="inputLabel">Username</label>
                    <input type="text" class="input" name="username" id="username" value="<?php echo e(old('username')); ?>">
                    <?php if($errors->has('username')): ?>
                        <h3><?php echo e($errors->first('username')); ?></h3>
                    <?php endif; ?>
                    <label for="email" class="inputLabel">Email</label>
                    <input type="text" class="input" name="email" id="email" value="<?php echo e(old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                        <h3><?php echo e($errors->first('email')); ?></h3>
                    <?php endif; ?>
                    <label for="phone_number" class="inputLabel">Phone Number</label>
                    <input type="text" class="input" name="phone_number" id="phone_number"
                        value="<?php echo e(old('phone_number')); ?>">
                    <?php if($errors->has('phone_number')): ?>
                        <h3><?php echo e($errors->first('phone_number')); ?></h3>
                    <?php endif; ?>
                    <label for="address" class="inputLabel">Address</label>
                    <input type="text" class="input" name="address" id="address" value="<?php echo e(old('address')); ?>">
                    <?php if($errors->has('address')): ?>
                        <h3><?php echo e($errors->first('address')); ?></h3>
                    <?php endif; ?>
                    <div class="button-wrap">
                        
                            <a class="edit-button" id="back" href="/profile">Back</a>
                        
                        
                            <button type="submit" class="edit-button">Update</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/editprofile.blade.php ENDPATH**/ ?>