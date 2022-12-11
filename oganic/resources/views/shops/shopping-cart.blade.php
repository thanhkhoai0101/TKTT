@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $items)
                        <tr>
                            <td class="shoping__cart__item">
                                <img src="img/product/{{$items->attributes->image}}" alt="" style="width: 130px">
                                <h5>{{$items->name}}</h5>
                            </td>
                            <td class="shoping__cart__price">
                                ${{$items->price}}
                            </td>
                            <td class="shoping__cart__quantity">

                                <form action="{{route('cart.update-cart')}}" method="post" class="d-flex">
                                    @csrf
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" value="{{$items->quantity}}" name="quantity">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$items->id}}">
                                    <button class="btn"><span class="icon_loading" style="padding-right: 4px"></span>update</button>
                                </form>

                            </td>
                            <td class="shoping__cart__total">
                                ${{$items->price*$items->quantity}}
                            </td>
                            <td class="shoping__cart__item__close">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $items->id }}" name="id">
                                    <button class="btn"><span class="icon_close"></span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns d-flex justify-content-between">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                    <form action="{{route('cart.clear')}}" method="post">
                        @csrf
                        <button class="btn btn-danger primary-btn">Delete All</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>${{ Cart::getTotal()}}</span></li>
                    </ul>
                    <a href="{{route('orders.create')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
@endsection
