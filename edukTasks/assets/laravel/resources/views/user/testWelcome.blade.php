@extends('layouts.app')

@section('content')
<div class="welcomeContainer">
    <div class="messageContainer">
        <div class="titleSection">
            <h3>Maligayang pagdating, {{$user->firstname . ' ' . $user->lastname}}, sa Mathayog!</h3>
        </div>
        <div class="contentSection">
            <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas! Maghanda ka na upang buksan ang mahika ng mga numero habang iniikot ang kamangha-manghang mga tanawin at isinasanay ang iyong sarili sa masiglang kultura ng magandang bansang ito.</p>
            <button class="btnTest">Tara na!</button>
        </div>

    </div>
    <!-- <div class="row align-items-center">
        <div class="welcomeMessage">
            <img class="rounded-circle" src="https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=0.752xw:1.00xh;0.175xw,0&resize=1200:*"  alt="a dog" style="height: 10em" />
        </div>
        <div class="col-9">
                
            <div class="d-flex align-items-center gap-3">
            </div>
                <div class="pt-2"><p>{{$user->firstname}}<p></div>
                <div class="pt-2"><p>{{$user->lastname}}</p></div>
                <div class="pt-2"><a target="_blank" href="#" >{{$user->email}}</a></div>
            </div> -->
</div>

</div>
@endsection