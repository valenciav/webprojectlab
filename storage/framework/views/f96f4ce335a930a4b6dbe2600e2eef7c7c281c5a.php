<?php $__env->startSection('content'); ?>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/additem.css')); ?>">
    <script src="<?php echo e(URL::asset('js/image.js')); ?>"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <div class="background">
        <div class="Add-template">
            <h2>Add Item</h2>
            <form action="/additem" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="input-container">
                    <div class="text-input">
                        <label class="input-label" for="CName">Clothes Name
                            <input type="text" class="input-add" id="CName" value="<?php echo e(old('CName')); ?>"name="CName">
                        </label>
                        <?php if($errors->has('CName')): ?>
                            <h1><?php echo e($errors->first('CName')); ?></h1>
                        <?php endif; ?>
                        <label class="input-label" for="CDesc">Clothes Description
                            <input type="text" class="input-add" id="CDesc" value="<?php echo e(old('CDesc')); ?>"name="CDesc">
                        </label>
                        <?php if($errors->has('CDesc')): ?>
                            <h1><?php echo e($errors->first('CDesc')); ?></h1>
                        <?php endif; ?>
                        <label class="input-label" for="CPrice">Clothes Price
                            <input type="text" class="input-add" id="CPrice" value="<?php echo e(old('CPrice')); ?>"name="CPrice">
                        </label>
                        <?php if($errors->has('CPrice')): ?>
                            <h1><?php echo e($errors->first('CPrice')); ?></h1>
                        <?php endif; ?>
                        <label class="input-label" for="CStock">Clothes Stock
                            <input type="text" class="input-add" id="CStock" value="<?php echo e(old('CStock')); ?>"name="CStock">
                        </label>
                        <?php if($errors->has('CStock')): ?>
                            <h1><?php echo e($errors->first('CStock')); ?></h1>
                        <?php endif; ?>
                    </div>
                    <div class="image">
                        <?php if($errors->has('CImage')): ?>
                            <h1><?php echo e($errors->first('CImage')); ?></h1>
                        <?php endif; ?>
                        <label for="CImage" class="input-label">Item Image
                            <input type="file" id="CImage" name="CImage" class="btn" onchange="read(this);">
                        </label>
                        <img src="#" id="image" alt="No file chosen yet.">
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success">
                                <p><?php echo e($message); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="back">
                    <button type="submit" class="btn add-button">Add</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valen\Study\Semester5\WebProgramming\LAB\webprogprojectnew\webProgProject\resources\views/admin_page/additem.blade.php ENDPATH**/ ?>