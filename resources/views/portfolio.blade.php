@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<!-- HEADER / HERO -->
<div class="position-relative mb-5">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100"
         style="height: 300px; object-fit: cover; border-radius: 64px;">
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100">
        <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
            Portfolio
        </h1>
    </div>
</div>

<!-- PORTFOLIO GRID -->
<div class="container pb-5">
    <div class="row g-4">
        @php
            $portfolioItems = [
                ['image' => 'contact-hero.jpg', 'caption' => 'Perumahan Klampis'],
                ['image' => 'contact-hero.jpg', 'caption' => 'Rumah Raffi Ahmad'],
                ['image' => 'contact-hero.jpg', 'caption' => 'Perumahan Green Lake'],
                ['image' => 'contact-hero.jpg', 'caption' => 'D Kos'],
                ['image' => 'contact-hero.jpg', 'caption' => 'Perumahan Graha Gunawan'],
                ['image' => 'contact-hero.jpg', 'caption' => 'Vila Asri'],
            ];
        @endphp

        @foreach ($portfolioItems as $item)
            <div class="col-md-6">
               <div class="rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                <img src="{{ asset('images/' . $item['image']) }}" alt="Portfolio Item"
                  class="img-fluid w-100"
                  style="height: 250px; object-fit: cover; border-radius: 24px;">
                <p class="fw-semibold text-center" style="color: #7a5c3d; margin-top: 8px; margin-bottom: 24px;">
                  {{ $item['caption'] }}
                </p>

              </div>
            </div>
          @endforeach
    </div>
</div>

@endsection
