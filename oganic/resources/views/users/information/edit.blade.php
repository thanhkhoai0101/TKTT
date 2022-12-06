@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')
<div style="margin:auto; background-color: grey " class="d-flex justify-content-center ">
    <form action="{{route('customer.edit',['id'=>$customer->id])}}" style="background-color: greenyellow">
        @csrf
        <div class="d-flex justify-content-between flex-column align-items-end" style="max-width: 600px;padding: 50px">
            <div class="form-group">
                <label class="label-control">Họ tên</label>
                <input type="text"  value="{{$customer->Name}}" >
            </div>
            <div class="form-group">
                <lable>Địa chỉ: </lable>
                <input type="text"  value="{{$customer->Address}}">
            </div>
            <div class="form-group">
                <lable>Số điện thoại: </lable>
                <input type="text"  value="{{$customer->PhoneNumber}}">
            </div>
            <div class="form-group">
                <lable>Email: </lable>
                <input type="text"  value="{{$customer->Email}}">
            </div>
            <div class="form-group">
                <lable>Tên tài khoản: </lable>
                <input type="text"  value="{{$customer->Username}}">
            </div>
            <div class="form-group">
                <lable>Mật khẩu: </lable>
                <input type="password"  value="{{$customer->Password}}">
            </div>
            <button type="submit" class="btn btn-danger">Edit</button>



    </div>
    </form>

</div>
@endsection
