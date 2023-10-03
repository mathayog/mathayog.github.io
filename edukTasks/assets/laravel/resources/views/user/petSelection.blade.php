@extends('layouts.app')

@section('content')
<div class="selection-container">
    <div class="pet-selection-container">
        <div class="pet-title-section">
            <img src="{{asset('assets/images/svgs/selection_user_icon.svg')}}" alt="selectionUserIcon" class="selection-user-icon">
            <div class="pet-bubble">
                <h3>Pumili ng alaga!</h3>
                <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
            </div>
            <div class="pet-bubble-tail"></div>
        </div>
        <div class="pet-content-section">
            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/pet1.svg')}}" alt="pet1" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Pet 1</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>

            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/pet2.svg')}}" alt="pet2" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Pet 2</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>

            <div class="pet-card">
                <div class="pet-img-frame">
                    <img src="{{asset('assets/images/svgs/pet3.svg')}}" alt="pet3" class="pet-img">
                </div>
                <div class="pet-text-content">
                    <h4>Pet 3</h4>
                    <p>Ang pinakamahusay na paglalakbay puno ng matematika sa puso ng Pilipinas!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
