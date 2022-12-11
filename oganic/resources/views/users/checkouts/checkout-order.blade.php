<div class="col-lg-4 col-md-6">
    <div class="checkout__order">
        <h4>Your Order</h4>
        <div class="checkout__order__products">Products <span>Total</span></div>
        <ul>
            @foreach($cartItems as $items)
            <li>{{$items->name}} <span>${{$items->price*$items->quantity}}</span></li>
            @endforeach
        </ul>
        <div class="checkout__order__total">Total <span>${{ Cart::getTotal()}}</span></div>
        <div class="checkout__input__checkbox">
            <label for="acc-or">
                Create an account?
                <input type="checkbox" name="account" id="acc-or">
                <span class="checkmark"></span>
            </label>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua.</p>

        <button type="submit" class="site-btn">PLACE ORDER</button>
    </div>
</div>
