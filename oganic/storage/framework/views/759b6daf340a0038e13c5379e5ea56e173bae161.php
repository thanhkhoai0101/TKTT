<?php
if ($_SERVER['QUERY_STRING']!=""){
    $param=explode('=',$_SERVER['QUERY_STRING']);
}else{
    $param[1]='';
}

?>


    <ul>
        <li class="<?php echo e(($param[1]=='')?'active':''); ?>" data-filter="*"><a href="/" style="color: black">All</a></li>
        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php echo e(($param[1]==$items->id)?'active':''); ?>" ><a href="?cat_id=<?php echo e($items->id); ?>" style="color: black"><?php echo e($items->Name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--        <li data-filter=".oranges">Oranges</li>-->
<!--        <li data-filter=".fresh-meat">Fresh Meat</li>-->
<!--        <li data-filter=".vegetables">Vegetables</li>-->
<!--        <li data-filter=".fastfood">Fastfood</li>-->

    </ul>
<?php /**PATH /code/demo/TKTT/oganic/resources/views/partial/categories.blade.php ENDPATH**/ ?>