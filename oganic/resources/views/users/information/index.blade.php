@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')
<div style="margin:auto; background-color: grey " class="d-flex justify-content-center ">

    @foreach($customers as $customer)
    <form action="{{route('customer.update',['username'=>$customer->Username])}}" method="post" style="background-color: greenyellow">
        @csrf
        <div class="{{(!empty($message))? 'btn-success btn' : ''}}" style="width: 100%">{{$message}}</div>
        <div class="d-flex justify-content-between flex-column align-items-end" style="max-width: 600px;padding: 50px">

            <div class="form-group">
                <label class="label-control">Họ tên</label>
                <input type="text" name="Name" value="{{$customer->Name}}" >
            </div>
            <div class="form-group">
                <lable>Địa chỉ: </lable>
                <input type="text" name="Address" value="{{$customer->Address}}">
            </div>
            <div class="form-group">
                <lable>Số điện thoại: </lable>
                <input type="text" name="PhoneNumber" value="{{$customer->PhoneNumber}}">
            </div>
            <div class="form-group">
                <lable>Email: </lable>
                <input type="text" name="Email" value="{{$customer->Email}}">
            </div>
            <div class="form-group">
                <lable>Tên tài khoản: </lable>
                <input type="text" name="Username" value="{{$customer->Username}}">
            </div>
            <div class="form-group">
                <lable>Mật khẩu: </lable>
                <input type="password" name="Password"  value="{{$customer->Password}}">
            </div>
            <button type="submit" class="btn btn-danger">Save</button>

        </div>
    </form>
    @endforeach

</div>
@endsection
