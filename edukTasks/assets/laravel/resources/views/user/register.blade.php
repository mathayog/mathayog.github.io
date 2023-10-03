<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/registration-page.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login-form.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="register-container">
        <div class="register-page-title-description">
            <div class="register-page-icon-title" style="display: flex">
                <img class="register-page-icon" src="{{asset('assets/images/svgs/mathayog_logo.svg')}}" alt="">
                <h3 class="register-page-title">Mathayog</h3>
            </div>
            <div class="register-page-description">
                @if(Route::currentRouteName() == 'register')
                <p class="page-description">Maglibot-libot sa Pagsusuri ng <br>Matematika sa Buong Pilipinas</p>
                @else
                <p class="page-description">Buksan ang mga Lihim ng mga <br>Lungsod sa Buong Pilipinas <br>Gamit ang Matematika</p>
                @endif
            </div>
        </div>

        <div class="form-container">
            <!-- form component -->
            @yield('content')
        </div>
    </div>

</body>

</html>