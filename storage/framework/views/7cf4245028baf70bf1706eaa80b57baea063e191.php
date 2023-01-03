<link rel="stylesheet" href="<?php echo e(URL::asset('css/subhome.css')); ?>">


<?php $__env->startSection('content'); ?>
<div class="item-detail-box">
    <img src="<?php echo e(URL::asset($item->image)); ?>" alt="<?php echo e($item->name); ?> image">
    <div class="details-container">
        <h2><?php echo e($item->name); ?></h2>
        <h3>Rp<?php echo e($item->price); ?></h3>
        <h4>Product Detail</h4>
        <p><?php echo e($item->description); ?></p>
        <hr>
        <div class="btn-group">
            <?php if(Auth::user()->role != 'admin'): ?>
                <form id="addtocart" action="/home/item_details/<?php echo e($item->id); ?>" onsubmit="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="quantity-wrapper">
                        <label for="quantity"><h4>Quantity:</h4></label>
                        <input type="number" name="quantity" id="quantity">
                        
                        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn">Add To Cart</button>
                </form>
            <?php else: ?>
                <button class="btn del" onclick="showPopup()">Delete Item</button>
                <div class="popup" id="popup">
                    <div class="center-popup">
                        <div class="popup-header">
                            <h4>Delete Item</h4>
                            <button type="button" class="x" onclick="showPopup()">&times;</button>
                        </div>
                        <div class="popup-body">
                            <h5>Delete <?php echo e($item->name); ?>?</h5>
                        </div>
                        <div class="btn-group">
                            <button class="btn" onclick="showPopup()">No</button>
                            <a href="/home/<?php echo e($item->id); ?>" class="btn del">Yes</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <button type="button" class="btn back" onclick="history.back()">Back</button>
    </div>
</div>
<script src="<?php echo e(URL::asset('js/popup.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/core_page/subhomecontent/itemdetails.blade.php ENDPATH**/ ?>