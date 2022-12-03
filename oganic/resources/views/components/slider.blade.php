<?php
$url = explode('/',$_SERVER['REQUEST_URI']);
?>
<section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?=($url[1]=='shops')?'Organic Shop':(($url[1] == 'shop_carts') ? 'Shopping Cart' : '')?></h2>
                    <div class="breadcrumb__option">
                        <a href="/">Home</a>
                        <span><?= ($url[1] == 'shops') ? 'Shops' : (($url[1] == 'shop_carts') ? 'Shopping Cart' : '') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
