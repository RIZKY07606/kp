@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="position-relative">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100"
         style="height: 300px; object-fit: cover; border-radius: 64px;">
   <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100">
    <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
        Tentang Kami
    </h1>
</div>
</div>

<div class="container py-5">

  <!-- Siapa Kami -->
  <div class="row align-items-center mb-5">
    <!-- Gambar Kiri -->
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="images/contact-hero.jpg" alt="Ruangan" class="img-fluid rounded-4 w-100">
    </div>

    <!-- Teks Kanan -->
 <div class="col-md-6">
  <h4 class="fw-bold mb-3 fs-1">Siapa Kami?</h4>
  <p class="fs-5" style="color: #7a5c3d;">
    Muqshit Living hadir sebagai studio arsitektur dan interior yang tidak hanya fokus pada estetika dan fungsi bangunan, tetapi juga menjunjung tinggi nilai-nilai Islam dalam setiap desain.<br><br>
    Kami percaya bahwa rumah bukan sekadar tempat tinggal, tapi ruang yang menjadi sumber ketenangan, keberkahan, dan kehidupan yang lebih terarah. <br>
    Dengan menggabungkan kreativitas, keilmuan, dan prinsip syar’i, kami berkomitmen untuk menghadirkan karya yang indah secara visual, kuat secara struktur, dan bernilai secara spiritual.
  </p>
 </div>
</div>

<div class="row mb-5 g-4 align-items-stretch">
  <!-- Kolom kiri: Visi dan Misi -->
  <div class="col-md-6 d-flex flex-column justify-content-between gap-4">
    <!-- VISI -->
    <div class="p-4 rounded-4 shadow-sm h-100" style="background-color: #f8e9d7;">
      <h5 class="fw-bold mb-2 text-center fs-4">Visi</h5>
      <p class="mb-0 text-muted text-center fs-6">
        Mewujudkan hunian dan ruang usaha yang mendukung kehidupan<br>
        islami dan penuh keberkahan, lewat desain yang fungsional, estetis,<br>
        dan syar’i.
      </p>
    </div>

    <!-- MISI -->
    <div class="p-4 rounded-4 shadow-sm h-100" style="background-color: #f8e9d7;">
      <h5 class="fw-bold mb-2 text-center fs-4">Misi</h5>
      <p class="mb-0 text-muted text-center fs-6">
        Mengedukasi masyarakat tentang pentingnya desain islami<br>
        Memberikan layanan arsitektur & interior yang profesional dan bernilai<br>
        Menjadi mitra pembangunan yang jujur dan amanah
      </p>
    </div>
  </div>

  <!-- Kolom kanan: Gambar -->
  <div class="col-md-6">
    <div class="h-100 w-100 overflow-hidden rounded-4 shadow-sm" style="min-height: 100%;">
      <img src="images/contact-hero.jpg" alt="Interior Desain"
        class="img-fluid w-100 h-100 object-fit-cover rounded-4">
    </div>
  </div>
</div>

  <!-- KUTIPAN -->
  <div class="text-center">
    <div class="p-4 rounded-4" style="background-color: #f8e9d7;">
      <blockquote class="fs-5 fst-italic text-dark mb-0">
        “Desain tak hanya tentang bentuk, tapi juga tentang nilai. Kami hadir untuk<br>
        membangun ruang yang indah dan bernilai syar’i”
      </blockquote>
    </div>
  </div>
</div>





@endsection 