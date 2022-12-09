<div class="row featured__filter">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/product/<?php echo e($items->Avatar); ?>">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#"><?php echo e($items->Name); ?></a></h6>
                <h5>$<?php echo e($items->SalePrice); ?></h5>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">-->
<!--        <div class="featured__item">-->
<!--            <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">-->
<!--                <ul class="featured__item__pic__hover">-->
<!--                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="featured__item__text">-->
<!--                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                <h5>$30.00</h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
<?php /**PATH /code/demo/TKTT/oganic/resources/views/partial/products_home.blade.php ENDPATH**/ ?>