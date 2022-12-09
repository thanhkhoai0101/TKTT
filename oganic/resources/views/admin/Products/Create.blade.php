@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> thêm sản phẩm </h1>

    <form action={{route('admin.product.CreateConfirm')}} method="POST" >
         @csrf
         <label class="form-label" for="Name"> Name:
            <input class="form-control" type="text" name="name">
        </label>
        <br>
        <label class="form-label" for="Description"> Description:
            <input class="form-control" type="text" name="Description">
        </label>
        <br>
        <label class="form-label" for="SalePrice"> SalePrice:
            <input class="form-control" type="Number" name="SalePrice">
        </label>
        <br>
        <label  class="form-label" for="Weight"> Weight:
            <input class="form-control" type="Number" name="Weight">
        </label>
        <br>
        <label  class="form-label" for="StockQuantity"> StockQuantity:
            <input class="form-control"  type="Number" name="StockQuantity">
        </label>
        <br>
        <label  class="form-label" for="CategoryId">Category:</label>
        <select class="form-control" name="CategoryId" id="CategoryId">
            <option value="1">Fresh Meat</option>
            <option value="2">Vegetables</option>
            <option value="3">Fruit & Nut Gifts</option>
            <option value="4">Fast Food</option>
            <option value="5">Ocean Foods</option>
            <option value="6">Butter & Eggs</option>
            <option value="7">Fresh Onions</option>
            <option value="8">Fresh Berries</option>
            <option value="9">Fresh Onions</option>
            <option value="10">Oatmeal</option>
            <option value="11">Oatmeal</option>
          </select>
        <br>
        <div class="mb-3">
            <label class="form-label"  for="Avatar">Avatar </label>
            <input class="form-control form-control-sm"   type="file" name="Avatar" id="Avatar">
        
        </div>
    
        
        <br>
        <button type="submit">Create Product</button>
    </form>
</body>
</html>
@endsection
@section('script')

<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('../js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('../js/demo/chart-pie-demo.js')}}"></script>

@endsection             