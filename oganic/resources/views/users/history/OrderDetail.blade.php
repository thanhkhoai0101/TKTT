@extends('layouts.index')

@section('slider')
@include('components.slider')
@endsection

@section('content')

<div class = "d-flex justify-content-center" style = "width: 50rem;position: relative;left: 25%;">
        <table class="table">
            <tr class = "table thead-dark" >
                <th style="text-align: center;">STT</th>
                <th style="text-align: center;">Sản phẩm</th>
                <th style="text-align: center;">Số lượng</th>
                <th style="text-align: center;">Giá</th>
            </tr>
            @foreach($order_details as $order_detail)
                <tr class = "table table-light">
                    <td style="text-align: center;">{{ $order_detail->OrderId}}</td>
                    <td style="text-align: center;">{{ $order_detail->ProductId}}</td>
                    <td style="text-align: center;">{{ $order_detail->Quantity}}</td>
                    <td style="text-align: center;">{{ $order_detail->SalePrice}}</td>
                </tr>
            @endforeach
        </table>
</div>
@endsection
