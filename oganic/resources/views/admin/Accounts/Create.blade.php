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
    <h1> thêm Tài khoản </h1>

    <form action={{route('admin.account.CreateConfirm')}} method="POST" >
         @csrf
         <label class="form-label" for="Name"> Name:
            <input class="form-control" type="text" name="name">
        </label>
        <br>
        <label class="form-label" for="Address"> Address:
            <input class="form-control" type="text" name="Address">
        </label>
        <br>
        <label class="form-label" for="PhoneNumber"> PhoneNumber:
            <input class="form-control" type="tel" name="PhoneNumber">
        </label>
        <br>
        <label  class="form-label" for="Email"> Email:
            <input class="form-control" type="enail" name="Email">
        </label>
        <br>
        <label  class="form-label" for="Username"> Username:
            <input class="form-control" type="text" name="Username">
        </label>
        <br>
        <label  class="form-label" for="Password"> Password:
            <input class="form-control" type="text" name="Password">
        </label>
        
        <br>
        <button type="submit">Create Account</button>
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