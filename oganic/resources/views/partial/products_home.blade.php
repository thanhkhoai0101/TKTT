<div class="row featured__filter">
    @foreach($products as $items)
    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/product/{{$items->Avatar}}">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="{{route('shops.show',['id'=> $items->id])}}"><i class="fa fa-eye"></i></a></li>
                    <li><a href="">
                        <form action="{{route('cart.add')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$items->id}}" name="id">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn" style="margin-bottom: 5px"><i class="fa fa-shopping-cart"></i></button>
                        </form></li></a>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#">{{$items->Name}}</a></h6>
                <h5>${{$items->SalePrice}}</h5>
            </div>
        </div>
    </div>
    @endforeach

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
