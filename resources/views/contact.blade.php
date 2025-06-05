@extends('layouts.app')

@section('title', 'Contact')

<style>
    .bg-custom {
        background-color: #F0DEC8 !important;
    }
</style>

@section('content')
<!-- Hero Section -->
<div class="position-relative mb-5">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100" 
         style="height: 300px; object-fit: cover; border-radius: 64px;">
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100 mb-4">
        <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
            Contact
        </h1>
    </div>
</div>

<!-- Contact Form -->
<form action="{{ route('send.whatsapp') }}" method="POST" class="p-3">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input name="nama" type="text" class="form-control rounded-pill bg-custom" placeholder="nama lengkap">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" type="email" class="form-control rounded-pill bg-custom" placeholder="email">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control rounded-pill bg-custom" placeholder="alamat">
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <input name="provinsi" type="text" class="form-control rounded-pill bg-custom" placeholder="provinsi">
        </div>
        <div class="col-md-4">
            <input name="kota" type="text" class="form-control rounded-pill bg-custom" placeholder="kota">
        </div>
        <div class="col-md-4">
            <input name="kecamatan" type="text" class="form-control rounded-pill bg-custom" placeholder="kecamatan">
        </div>
    </div>

    <div class="row g-3 mt-3">
        <div class="col-md-4">
            <input name="kelurahan" type="text" class="form-control rounded-pill bg-custom" placeholder="kelurahan">
        </div>
        <div class="col-md-4">
            <input name="kode_pos" type="text" class="form-control rounded-pill bg-custom" placeholder="kode pos">
        </div>
        <div class="col-md-2">
            <input name="rt" type="text" class="form-control rounded-pill bg-custom" placeholder="rt">
        </div>
        <div class="col-md-2">
            <input name="rw" type="text" class="form-control rounded-pill bg-custom" placeholder="rw">
        </div>
    </div>

    <div class="mt-4">
        <label class="form-label">Pesan</label>
        <textarea name="pesan" class="form-control rounded-4 bg-custom" rows="5" placeholder="pesan"></textarea>
    </div>

    <div class="mt-4 text-center">
        <button type="submit" class="btn rounded-pill px-5 text-white" style="background-color: #7a5c3d;">
            Submit
        </button>
    </div>
</form>
@endsection
