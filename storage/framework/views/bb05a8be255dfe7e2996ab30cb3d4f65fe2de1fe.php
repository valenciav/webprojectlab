<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mai Boutique</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/navbar.css')); ?>">
</head>

    <div class="navigation-bar">
        <img id="logo" src="<?php echo e(URL::asset('asset_image/MaiBoutique_black.png')); ?>" alt="">
        <ul class="navbar-left">
            <li style="<?php if(Request::path() == 'home'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>"><a
                    href="<?php echo e(url('home')); ?>">Home
                </a></li>
            <li style="<?php if(Request::path() == 'search'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>"><a
                    href="<?php echo e(url('search')); ?>">Search
                </a></li>
            <?php if(Auth::user()->role != 'admin'): ?>
                <li style="<?php if(Request::path() == 'cart'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>">
                    <a href="<?php echo e(url('viewcart')); ?>">Cart</a>
                </li>
                <li style="<?php if(Request::path() == 'history'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>">
                    <a href="<?php echo e(url('history')); ?>">
                        History</a>
                </li>
            <?php endif; ?>
            <li style="<?php if(Request::path() == 'profile'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>">
                <a href="<?php echo e(url('profile')); ?>">Profile</a>
            </li>
            <?php if(Auth::user()->role == 'admin'): ?>
                <li class="right-panel"
                    style="<?php if(Request::path() == 'additem'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>">
                    <a href="<?php echo e(url('additem')); ?>">
                        Add item</a>
                </li>
            <?php endif; ?>
            <li class="right-panel"
                style="<?php if(Request::path() == 'logout'): ?> font-weight:bold; font-size:20px; margin-top:28px; <?php endif; ?>">
                <a href="<?php echo e(url('logout')); ?>">Logout</a>
            </li>
        </ul>
    </div>
<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/navbar/navbar.blade.php ENDPATH**/ ?>