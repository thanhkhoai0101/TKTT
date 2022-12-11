
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{route('orders.store')}}" method="post">
                @csrf
                <div class="row">
<!--                    Checkout form-->
                    @include('users.checkouts.checkout-form')

<!--                    Checkout Order-->
                    @include('users.checkouts.checkout-order')

                </div>
            </form>
        </div>
    </div>
</section>
