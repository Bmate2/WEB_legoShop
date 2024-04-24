@extends('layouts.main')

@section('content')
<style>
    .btnregister {
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
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2>{{ __("Sign up") }}</h2>
            <div class="inputBox">
                <input type="text" name="name" required>
                <span>{{ __("Name") }}</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Adjon meg egy érvényes email címet">
                <span>{{ __("Email") }}</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <span>{{ __("Password") }}</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password_confirmation" required>
                <span>{{ __("Confirm Password") }}</span>
                <i></i>
            </div>
            <div class="links">
                <a href="{{ route('loginView') }}">{{ __("Already have an account") }}? {{ __("Sign in") }}</a>
            </div>
            <input type="submit" class="btnregister" value="{{ __("Register") }}">
        </form>
    </div>
</div>



@endsection