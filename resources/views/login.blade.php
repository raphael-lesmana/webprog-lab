@extends('extend.app')

@section('title', 'Log in')
@section('content')
<div class="grid z-3">
<div class="row">
    <div class="col-8 guest-background"></div>
        <div class="col-4 mx-auto" style="width:450px; margin-top: 150px; color:white;">
            <h1 class="text-center">Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control" placeholder="Has to end with @gmail.com" name="email" required style="width: 400px">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control" placeholder="Minimum 5 Characters, Maximum 255 Characters" name="password" required style="width: 400px">
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" style="width: 18px; height:18px" id="rememberMe" class="form-check-input" name="remember">
                    <label for="rememberMe" class="form-check-label">Remember Me</label>
                </div>
                <button type="sub`mit" class="btn btn-secondary mb-4" style="width: 400px">Login</button>
                <div class="mb-4" style="">
                    <p class="text-center">Don't have an account?  <a class="text-decoration-none" style="color: yellow" href="register">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
