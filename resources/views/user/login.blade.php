@extends('layouts.main')

@section('content')
<style>
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #1c2331;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
.btnlogin {
    background-color: #ff5722;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 20px;
    font-size: 16px;
    cursor: pointer;
}
</style>
<div class='col-md-8 col-lg-6 mx-auto'>
    <div class="box">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2>{{ __("Sign in") }}</h2>
            <div class="inputBox">
                <input type="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                    title="Adjon meg egy érvényes email címet">
                <span>{{ __("Email") }}</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required>
                <span>{{ __("Password") }}</span>
                <i></i>
            </div>

            <div class="links">
                <a href="#">{{ __("Forgot password") }}?</a>
                <a href="{{ route("registerView") }}">{{ __("Sign up") }}</a>
            </div>
            <input type="submit" name="" class="btnlogin" value="Login">
        </form>
    </div>
</div>
@endsection