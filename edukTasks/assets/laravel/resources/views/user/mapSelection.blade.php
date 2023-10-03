@extends('layouts.app')

@section('content')
<div class="selection-container">
    <div class="pet-selection-container">
        <div class="pet-title-section">
            <img src="{{asset('assets/images/svgs/selection_pet_icon.svg')}}" alt="selectionPetIcon" class="selection-user-icon">
            <div class="map-bubble">
                <h3>Which one do you want to board?</h3>
            </div>
            <div class="pet-bubble-tail"></div>
        </div>
        <div class="pet-content-section">
            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/map1.svg')}}" alt="map1" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Map 1</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>

            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/map1.svg')}}" alt="map2" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Map 2</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>

            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/map1.svg')}}" alt="map3" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Map 3</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
