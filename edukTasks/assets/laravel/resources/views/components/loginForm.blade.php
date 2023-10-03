@extends('user.register')

@section('content')
<div class="login-form">
    <h3 class="registration-form-title">Sama na sa Adventura at Simulan <br>ang iyong Paglalakbay</h3>
    <div class="dashed-line"></div>
    <form action="{{route('login')}}" class="page-form" method="POST">
        @csrf
        <div>
            <label for="email" class="registration-label">Email</label>
            <input type="email" id="email" name="email" required class="registration-input">
        </div>

        <div>
            <label for="password" class="registration-label">Password</label>
            <input type="password" id="password" name="password" required class="registration-input">
        </div>

        <div class="login-mid-content">
            <input type="radio">
            <p>Remember Me</p>
            <p>Forgot Password</p>
        </div>

        <button type="submit" class="registration-btn">Mag-Login</button>

        <div class="login-bottom-content">
            <p class="register-text">Don't have an account?</p>
            <a href="{{ route('register') }}" class="register-link"> Sign Up</a>
        </div>
    </form>
</div>
@endsection