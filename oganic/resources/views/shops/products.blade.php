<div class="row">
    @foreach($products as $product)

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/product/{{$product->Avatar}}">
                    <ul class="product__item__pic__hover">
                        <li><a href="{{route('shops.show',['id'=>$product->id])}}"><i class="fa fa-eye"></i></a></li>
                        <li>
                            <form action="{{route('cart.add')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="id">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{$product->Name}}</a></h6>
                    <h5>${{$product->SalePrice}}</h5>
                </div>
            </div>
        </div>

    @endforeach
</div>
