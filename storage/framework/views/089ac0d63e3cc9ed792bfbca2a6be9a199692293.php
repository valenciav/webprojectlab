<link rel="stylesheet" href="<?php echo e(URL::asset('css/subhome.css')); ?>">
<h1 class="header-catalogue">Find your best clothes to wear</h1>

<div class="items-container">
    <?php $__currentLoopData = $item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item-box">
            <img src="<?php echo e(URL::asset($item->image)); ?>" alt="<?php echo e($item->name); ?> image">
            <h2><?php echo e($item->name); ?></h2>
            <h3>Rp<?php echo e($item->price); ?></h3>
            <a class="btn" href="home/item_details/<?php echo e($item->id); ?>">More Detail</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo e($item_details->links()); ?>

<?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/subhomecontent/catalogueview.blade.php ENDPATH**/ ?>