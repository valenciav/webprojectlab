<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/signin.css')); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaiBoutique</title>
</head>

<body>
    <div class="intro">
        <h1 id="signin">Sign in</h1>
        <h2 id="subtitle">Explore the diversity of MaiBoutique</h2>
        <div id="container">
            <h2 id="registerAccount">Don't have an account?</h2>
            <button id="register">Register</button>
        </div>
    </div>
    <div class="right-field">
        <div class="signin">
            <img id="logo" src="<?php echo e(URL::asset('asset_image/MaiBoutique_black.png')); ?>" alt="">
            <div class="signin-template">
                <form id="form" action="/signin" onsubmit="onSubmission()" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if($errors->has('unauthorized')): ?>
                        <h3><?php echo e($errors->first('unauthorized')); ?></h3>
                    <?php endif; ?>
                    <label for="email" class="inputLabel">Email</label>
                    <input type="text" class="input" name="email" id="email"
                        value=<?php echo e(Cookie::get('emailCookie') !== null ? Cookie::get('emailCookie') : old('email')); ?>>
                    <?php if($errors->has('email')): ?>
                        <h3><?php echo e($errors->first('email')); ?></h3>
                    <?php endif; ?>
                    <label for="password" class="inputLabel">Password</label>
                    <input type="password" class="input" name="password"
                        value=<?php echo e(Cookie::get('passwordCookie') !== null ? Cookie::get('passwordCookie') : ''); ?>>
                    <?php if($errors->has('password')): ?>
                        <h3><?php echo e($errors->first('password')); ?></h3>
                    <?php endif; ?>
                    <div id="back">
                        <label for="checkbox" class="tickbox">Remember me</label>
                        <input type="checkbox" name="remember" id="remember"
                            checked=<?php echo e(Cookie::get('emailCookie') !== null); ?>>
                    </div>
                    <div id="back">
                        <button type="submit" class="sign-button" id="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo e(URL::asset('js/signin.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/Login_authentication/signin.blade.php ENDPATH**/ ?>