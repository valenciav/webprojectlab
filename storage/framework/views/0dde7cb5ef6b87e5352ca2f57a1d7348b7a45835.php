<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/register.css')); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaiBoutique</title>
</head>

<body>
    <div class="intro">
        <h1 id="register">Register</h1>
        <h2 id="subtitle">Explore the diversity of MaiBoutique</h2>
        <div id="container">
            <h2 id="checkAccount">Already have an account?</h2>
            <button id="signin">Sign in</button>
        </div>
    </div>
    <div class="left-field">
        <div class="register">
            <img id="logo" src="<?php echo e(URL::asset('asset_image/MaiBoutique_black.png')); ?>" alt="">
            <div class="register-template">
                <form id="form" action="/register" onsubmit="onSubmission()" method="POST">
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
                    <label for="password" class="inputLabel">Password</label>
                    <input type="password" class="input" name="password" value="<?php echo e(old('password')); ?>">
                    <?php if($errors->has('password')): ?>
                        <h3><?php echo e($errors->first('password')); ?></h3>
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
                    <div id="back">
                        <button type="submit" class="register-button" id="login">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="<?php echo e(URL::asset('js/register.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/Login_authentication/register.blade.php ENDPATH**/ ?>