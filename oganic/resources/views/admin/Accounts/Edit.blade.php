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
    <h1> sử tài khoản </h1>

    <div class="pull-right">

        </div>
    <form action={{route('admin.account.updateConfirm')}} method="POST" >
        @csrf
        <input type="hidden" name="id" value="{{$account->id}}">
        <label class="form-label" for="Name"> Name:
            <input class="form-control" type="text" name="Name" value="{{$account->Name}}">
        </label>
        <br>
        <label class="form-label" for="Address"> Address:
            <input class="form-control" type="text" name="Address" value="{{$account->Address}}">
        </label>
        <br>
        <label class="form-label" for="PhoneNumber"> PhoneNumber:
            <input class="form-control" type="tel" name="PhoneNumber" value="{{$account->PhoneNumber}}">
        </label>
        <br>
        <label  class="form-label" for="Email"> Email:
            <input class="form-control" type="email" name="Email" value="{{$account->Email}}">
        </label>
        <br>
        <button type="submit"  class="btn btn-primary ml-3 btn-success">Submit</button>
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
