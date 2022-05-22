@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center text-dark mt-5">Login Form</h2>
                    <div class="card my-5">
                        <form action="{{ route('login') }}" method="POST" class="card-body cardbody-color p-lg-5">
                            @csrf
                            <x-alert />
                            <div class="mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 w-100">Login</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <h5>Demo</h5>
                            <span>Email : admin@admin.com</span> <br>
                            <span>Password : 12345678</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
