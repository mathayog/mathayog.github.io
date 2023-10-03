@extends('user.register')

@section('content')
<div class="registration-form">
    <h3 class="registration-form-title">Sama na sa Adventura at Simulan <br>ang iyong Paglalakbay</h3>
    <div class="dashed-line"></div>
    <form action="{{route('register')}}" class="page-form" method="POST">
        @csrf
        <div class="registration-form-name">
            <div class="registration-form-firstname">
                <label for="firstname" class="registration-label">First Name</label>
                <input type="text" id="firstname" name="firstname" required class="registration-input firstname">
            </div>
            <div class="registration-form-lastname">
                <label for="lastname" class="registration-label">Last Name</label>
                <input type="text" id="lastname" name="lastname" required class="registration-input lastname">
            </div>
        </div>

        <div>
            <label for="email" class="registration-label">Email</label>
            <input type="email" id="email" name="email" required class="registration-input">
        </div>

        <div>
            <label for="password" class="registration-label">Password</label>
            <input type="password" id="password" name="password" required class="registration-input">
        </div>

        <div>
            <label for="password_confirmation" class="registration-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required class="registration-input">
        </div>
        <button type="submit" class="registration-btn">Mag-Register</button>
    </form>
</div>
@endsection