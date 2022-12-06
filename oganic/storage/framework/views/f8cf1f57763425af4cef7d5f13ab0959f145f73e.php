<?php
$url = explode('/',$_SERVER['REQUEST_URI']);
if(str_contains($url[1],'?')){
    $url = explode('?',$url[1]);
}
else{
    $url[0]=$url[1];
}
if ($url[0]=='')
$url[0]='Home';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | <?=$url[0]?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <!-- CSS only -->
<!--    Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    a{
        text-decoration: none;
    }
    a:hover{
        color: green !important;
    }
    #page svg{
        width: 50px;
    }
</style>
<body>

<!-- Header Section Begin -->
<?php echo $__env->make('partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<?php echo $__env->yieldContent('hero'); ?>
<!-- Hero Section End -->

<!--Slider-->
<?php echo $__env->yieldContent('slider'); ?>

<!--Content-->
<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Section Begin -->
<?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.slicknav.js')); ?>"></script>
<script src="<?php echo e(asset('js/mixitup.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>



</body>

</html>
<?php /**PATH /code/demo/TKTT/oganic/resources/views/layouts/index.blade.php ENDPATH**/ ?>