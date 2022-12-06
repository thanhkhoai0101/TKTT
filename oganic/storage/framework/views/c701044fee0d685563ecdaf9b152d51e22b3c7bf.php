<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo e($product->Avatar); ?>">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                    <li><a href="<?php echo e(route('shops.show',['id'=> $product->id])); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#"><?php echo e($product->Name); ?></a></h6>
                <h5>$<?php echo e($product->SalePrice); ?></h5>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /code/demo/TKTT/oganic/resources/views/shops/products.blade.php ENDPATH**/ ?>