<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>

                        @foreach($categories as $items)
                        <li><a href="?cat_id={{$items->id}}">{{$items->Name}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">

                        <form action="{{route('home')}}" method="get">

                            <div class="hero__search__categories">
                                All Categories
                                {{-- <span class="arrow_carrot-down"></span> --}}
                            </div>
                            <input id="search-input" type="search" name="product_name" type="text" required placeholder="What do yo u need?">
                            <button  id="search-button" type="submit" class="site-btn">SEARCH</button>

                        </form>

                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div><span style="display: block">  @if (Session::has('status'))
                    <div class=" alert alert-danger"> {{ Session::get('status') }}</div>
                @endif</span></div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item">
                            <div class="hero__item set-bg " data-setbg="img/banner/banner-6.jpg">
                                <div class="hero__text">
                                    <span>organic food</span>
                                    <h2 style="color:#3ece6e;">Farm Market</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="{{route('shops.index')}}" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="hero__item set-bg " data-setbg="img/banner/banner-7.jpg">
                                <div class="hero__text">
                                    <span>100% natural</span>
                                    <h2><span>LOCAL GROWN</span>  <br />VEGETABLES</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="{{route('shops.index')}}" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="hero__item set-bg " data-setbg="img/hero/banner.jpg">
                                <div class="hero__text">
                                    <span>FRUIT FRESH</span>
                                    <h2>Vegetable <br />100% Organic</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="{{route('shops.index')}}" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="hero__item set-bg " data-setbg="img/banner/banner-8.jpg">
                                <div class="hero__text">
                                    <span>FRUIT FRESH</span>
                                    <h2 style="color: aliceblue">Organic Food</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="{{route('shops.index')}}" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>

