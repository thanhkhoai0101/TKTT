@extends('layouts.index')
@section('content')


    <section class="vh-75" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    @if (Session::has('success'))
                                        <div class=" alert alert-success"> {{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                    <div class=" alert alert-danger"> {{ Session::get('fail') }}</div>
                                @endif
                                    <form class="mx-1 mx-md-2" action="{{ route('take-register') }}" method="POST">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            @csrf
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Your Name</label>
                                                <input type="text" class="form-control" name="Name"
                                                    value="{{ old('Name')  }}" />
                                                <span class="text-danger"> @error('Name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Your Email</label>
                                                <input type="email" class="form-control" name="Email"
                                                    value="{{ old('Email') }}" />
                                                <span class="text-danger"> @error('Email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">User Name</label>
                                                <input type="text" class="form-control" name="Username"
                                                    value="{{ old('Username') }}" />
                                                <span class="text-danger"> @error('Username')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="Password" />
                                                <span class="text-danger"> @error('Password')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="Address"
                                                    value="{{ old('Address') }}" />
                                                <span class="text-danger"> @error('Address')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Phone</label>
                                                <input type="number" class="form-control" name="PhoneNumber"
                                                    value="{{ old('PhoneNumber') }}" />
                                                <span class="text-danger">
                                                    @error('PhoneNumber')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
