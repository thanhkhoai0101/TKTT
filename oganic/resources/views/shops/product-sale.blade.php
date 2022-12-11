<div class="product__discount">
    <div class="section-title product__discount__title">
        <h2>Sale Off</h2>
    </div>
    <div class="row">
        <div class="product__discount__slider owl-carousel">
            @foreach($productsSale as $items)

            <div class="col-lg-4" style="width:100%">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg"
                         data-setbg="img/product/{{ $items->Avatar }}">
                        <div class="product__discount__percent">-20%</div>
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{route('shops.show',['id'=>$items->id])}}"><i class="fa fa-eye"></i></a></li>
                            <li><a href="">
                                    <form action="{{route('cart.add')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$items->id}}" name="id">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn" style="margin-bottom: 5px"><i class="fa fa-shopping-cart"></i></button>
                                    </form>
                            </a></li>

                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <span>Dried Fruit</span>
                        <h5><a href="#">Raisin’n’nuts</a></h5>
                        <div class="product__item__price">${{number_format($items->SalePrice - $items->SalePrice*0.2, 2, '.', '')}} <span>${{number_format($items->SalePrice, 2, '.', '')}}</span></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
