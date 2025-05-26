@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="display-4">Welcome to White Layout</h1>
            <p class="lead">Clean and minimalist design with white color scheme</p>
            
            <div class="mt-4">
                <button class="btn btn-outline-primary">Learn More</button>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card {
            border: none;
            border-radius: 15px;
        }
    </style>
@endpush