@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')
    <div style="margin:auto; background-color: grey " class="d-flex justify-content-center ">

            <div class="d-flex justify-content-between flex-column align-items-end" style="max-width: 600px;padding: 50px">

                @foreach($customer as $items)
                <form action="{{route('customer.edit',['id'=>$items->id])}}" style="background-color: greenyellow">
                    @csrf
                <div class="form-group">
                    <label class="label-control">Họ tên</label>
                    <input type="text" disabled value="{{$items->Name}}" >
                </div>
                <div class="form-group">
                    <lable>Địa chỉ: </lable>
                    <input type="text" disabled value="{{$items->Address}}">
                </div>
                <div class="form-group">
                    <lable>Số điện thoại: </lable>
                    <input type="text" disabled value="{{$items->PhoneNumber}}">
                </div>
                <div class="form-group">
                    <lable>Email: </lable>
                    <input type="text" disabled value="{{$items->Email}}">
                </div>
                <div class="form-group">
                    <lable>Tên tài khoản: </lable>
                    <input type="text" disabled value="{{$items->Username}}">
                </div>
                <div class="form-group">
                    <lable>Mật khẩu: </lable>
                    <input type="password" disabled value="{{$items->Password}}">
                </div>
                    <button type="submit" class="btn btn-danger">Edit</button>
                </form>
                @endforeach


        </div>

    </div>
@endsection
