@extends('layouts.login')

@section('container')

<div class="container col-xl-8 col-xxl-6">
    <div class="row align-items-center py-5">

        @if (session()->has('loginError'))
            <div class="alert alert-danger col-lg-8 mx-auto col-lg-4" role="alert">
                {{ session('loginError') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8 mx-auto col-lg-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-center mb-4">Sign In</h2>
        <div class="col-lg-8 mx-auto col-lg-4">
            <form action="/login" method="POST" class="p-4 p-md-5 border rounded-3 bg-light" autocomplete="off">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Sign In</button>
                <hr class="my-4">
                <div class="text-center">
                    <small class="text-muted text-center">Don't Have Account? <a href="/register">Sign Up Now!</a></small>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection