<?php $__env->startSection('slider'); ?>
<?php echo $__env->make('components.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div style="margin:auto; background-color: grey " class="d-flex justify-content-center ">
    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="" style="background-color: greenyellow">
        <?php echo csrf_field(); ?>
        <div class="d-flex justify-content-between flex-column align-items-end" style="max-width: 600px;padding: 50px">
            <div class="form-group">
                <label class="label-control">Họ tên</label>
                <input type="text"  value="<?php echo e($customer->Name); ?>" >
            </div>
            <div class="form-group">
                <lable>Địa chỉ: </lable>
                <input type="text"  value="<?php echo e($customer->Address); ?>">
            </div>
            <div class="form-group">
                <lable>Số điện thoại: </lable>
                <input type="text"  value="<?php echo e($customer->PhoneNumber); ?>">
            </div>
            <div class="form-group">
                <lable>Email: </lable>
                <input type="text"  value="<?php echo e($customer->Email); ?>">
            </div>
            <div class="form-group">
                <lable>Tên tài khoản: </lable>
                <input type="text"  value="<?php echo e($customer->Username); ?>">
            </div>
            <div class="form-group">
                <lable>Mật khẩu: </lable>
                <input type="password"  value="<?php echo e($customer->Password); ?>">
            </div>
            <button type="submit" class="btn btn-danger">Edit</button>



        </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /code/demo/TKTT/oganic/resources/views/users/information/index.blade.php ENDPATH**/ ?>