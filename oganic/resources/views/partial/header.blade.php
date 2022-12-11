<?php
$url = explode('/',$_SERVER['REQUEST_URI']);
if (str_contains($url[1],'?')){
    $url=explode('?',$url[1]);
    $url[1]=$url[0];
}
?>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope text-success"></i></li>
                            <li>Mua 999tr để chúng tôi freeship</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        @php
                        use App\Models\Customer;
                          if(Session::has('loginId') && Session::get('loginId') == true){
                              {{ $data = Customer::where('id', '=', Session::get('loginId'))->first();}}
                          }
                        @endphp
                        <?php
                        if(!empty($data->Username)) {  ?>

                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>  {{ isset($data->Username) ? 'Xin chao` '.$data->Username : 'Default' }}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li>   <a style="font-size: 15px" class="text text-warning" href="{{ route('logout') }}">Logout</a></li>
                                    <li>   <a style="font-size: 15px" class="text text-warning" href="{{ route('customer.show',['username'=>$data->Username]) }}">Information</a></li>
                                    <li>   <a style="font-size: 15px" class="text text-warning" href="{{ route('history.buyHistory',['username'=>$data->Username]) }}">Buy History</a></li>
                                </ul>
                            </div>

                        <?php } else{ ?>

                            <div class="header__top__right__auth">
                                <a href="/cc/login"><i class="fa fa-user"></i> Login</a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="<?=($url[1]=='')?'active':''?>"><a href="/">Home</a></li>
                        <li class="<?=($url[1]=='shops')?'active':''?>"><a href="{{route('shops.index')}}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li class="<?=($url[1]=='cart')?'active':''?>"><a href="{{route('cart.index')}}">Shoping Cart</a></li>
                                <li class="<?=($url[1]=='check_out')?'active':''?>"><a href="{{route('checkout')}}">Check Out</a></li>
                                <li class="<?=($url[1]=='blog_details')?'active':''?>"><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-bag"></i> <span>{{Cart::getTotalQuantity()}}</span></a></li>
                    </ul>
                    <div class="header__cart__price"><span>${{ number_format(Cart::getTotal(),2) }}</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
