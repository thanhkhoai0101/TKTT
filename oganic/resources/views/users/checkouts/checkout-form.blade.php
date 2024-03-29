@if(!empty(session('user')))
<div class="col-lg-8 col-md-6">
    <div class="checkout__input">
        <p>Full Name<span>*</span></p>
        <input type="text" value="{{session('user')->Name}}" name="name" placeholder="Phan Thanh A">
    </div>
    <div class="checkout__input">
        <p>Address<span>*</span></p>
        <input type="text" name="address" value="{{session('user')->Address}}" placeholder="123/3 street/wards/district..." class="checkout__input__add">
    </div>
    <div class="checkout__input">
        <p>Phone number<span>*</span></p>
        <input type="text" name="phone" value="{{session('user')->PhoneNumber}}" placeholder="+84">
    </div>
    <div class="checkout__input">
        <p>Email<span>*</span></p>
        <input type="email" placeholder="example@gmail.com" value="{{session('user')->Email}}" name="email">
    </div>
    <div class="checkout__input">
        <p>Note</p>
        <input type="text" value="" name="note">
    </div>
</div>

@else
<div class="col-lg-8 col-md-6">
    <div class="checkout__input">
        <p>Full Name<span>*</span></p>
        <input type="text" value="" name="name" placeholder="Phan Thanh A">
    </div>
    <div class="checkout__input">
        <p>Address<span>*</span></p>
        <input type="text" name="address" value="" placeholder="123/3 street/wards/district..." class="checkout__input__add">
    </div>
    <div class="checkout__input">
        <p>Phone number<span>*</span></p>
        <input type="text" name="phone" value="" placeholder="+84">
    </div>
    <div class="checkout__input">
        <p>Email<span>*</span></p>
        <input type="email" placeholder="example@gmail.com" value="" name="email">
    </div>
    <div class="checkout__input">
        <p>Note</p>
        <input type="text" value="" name="note">
    </div>
</div>
@endif


