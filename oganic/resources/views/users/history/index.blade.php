@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')
@php 
                        use App\Models\Customer;
                          if(Session::has('loginId') && Session::get('loginId') == true){
                              {{ $data = Customer::where('id', '=', Session::get('loginId'))->first();}}
                          }
                        @endphp

<?php
if(!empty($data->Username)) {  ?>

<div class = "d-flex justify-content-center" style = "width: 50rem;position: relative;left: 25%;">
        <table class="table">
            <tr class = "table thead-dark" >
                <th style="text-align: center;">STT</th>
                <th style="text-align: center;">Ngày Lập Mua</th>
                <th style="text-align: center;">Ghi Chú</th>
                <th style="text-align: center;">Xem Chi tiết</th>
            </tr>
            @foreach($orders as $order)
                <tr class = "table table-light">
                    <td style="text-align: center;">{{$order->id}}</td>
                    <td style="text-align: center;">{{$order->OrderDateTime}}</td>
                    <td style="text-align: center;">{{$order->Note}}</td>
                    <td style="text-align: center;"><a href="{{route('history.order_Detail',['username'=>$data->Username]) }}" class="btn btn-success">Chi tiết</a></td>
                </tr>
            @endforeach
        </table>
</div>
@endsection
<?php } ?>