@extends('layouts.app')

@section('title', 'Homepage')

<style>

    .fitur-desain {
        color: #7a6b53; /* warna coklat */
    }

    .fitur-desain strong {
        color: black; /* warna hitam untuk <strong> */
    }

    .hover-shadow:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        transform: scale(1.01);
        transition: all 0.3s ease;
    }

    .btn-brand {
        background-color: #1e3a8a; /* contoh biru navy */
        color: white;
        border: none;
    }

    .btn-brand:hover {
        background-color: #1e40af;
        color: white;
    }
</style>


@section('content')
<div class="position-relative">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100"
         style="height: 300px; object-fit: cover; border-radius: 64px;">
   <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center w-100">
    <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
        Wujudkan Hunian Syar'i<br>Untuk Anda dan Keluarga
    </h1>
</div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-start">
            <!-- KIRI: Judul + Gambar -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">
                    Arsitektur yang <br>
                    Mengedepankan Estetika <br>
                    dan Keberkahan – Muqshit Living
                </h2>
                <img src="{{ asset('images/contact-hero.jpg') }}" alt="Desain Rumah Modern"
     class="rounded-4 mt-3" style="border-radius: 20px; width: 90%; max-width: 100%;">
            </div>

            <!-- KANAN: Deskripsi + Fitur -->
            <div class="col-lg-6">
                <p class="fitur-desain">
                    Perusahaan jasa desain arsitektur interior dan kontraktor yang bisa memberikan hasil maksimal, efisien, ramah lingkungan, dan insyaAllah mengamalkan syariat Islam dan semua pekerjanya. Kami mengintegrasikan prinsip desain modern dengan nilai-nilai syar’i, demi menghadirkan hunian yang menenangkan, nyaman, dan penuh keberkahan.
                </p>
                <div class="row row-cols-1 row-cols-md-2 g-3 mt-4">

                    <div class="col d-flex flex-column align-items-start text-start">
                        <div class="mb-2">
                            <!-- Logo SVG langsung -->
                            <img src="images/pen-ruler-solid.svg" alt="Helmet Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div class="fitur-desain">
                            <strong>Desain Custom</strong><br>
                             Muqshit Living menyediakan desain secara custom untuk perorangan, baik arsitektur maupun interior dengan budget yang ramah di kantong.
                        </div>
                    </div>

                    <div class="col d-flex flex-column align-items-start text-start">
                        <div class="mb-2">
                            <!-- Logo SVG langsung -->
                            <img src="images/boxes-stacked-solid.svg" alt="Helmet Icon" style="width: 40px; height: 40px;">
                        </div>
                       <div class="fitur-desain">
                            <strong>Bundling Desain</strong><br>
                            Kami menerima paket kerjasama desain custom developer atau corporate untuk berkolaborasi dan bekerjasama dengan kami.
                        </div>
                    </div>

                    <div class="col d-flex flex-column align-items-start text-start">
                        <div class="mb-2">
                            <!-- Logo SVG langsung -->
                            <img src="images/helmet-safety-solid.svg" alt="Helmet Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div class="fitur-desain">
                            <strong>Build</strong><br>
                            Kita akan menjadi partner dalam pembuatan konstruksi bangunan dan interior, juga melayani custom furniture.
                        </div>
                    </div>


                    <div class="col d-flex flex-column align-items-start text-start">
                        <div class="mb-2">
                            <!-- Logo SVG langsung -->
                            <img src="images/book-quran-solid.svg" alt="Helmet Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div class="fitur-desain">
                            <strong>Desain Berbasis Syariat</strong><br>
                            Kami tidak hanya menciptakan desain yang fungsional, dan estetik, tapi juga mengintegrasikan prinsip syariat dalam setiap bangunan dan pekerjaan.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Documentation Section -->
<section class="py-5">
    <div class="container text-center">
        <h3 class="fw-bold mb-5">Dokumentasi Karya Kami</h3>
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <img src="{{ asset('images/contact-hero.jpg') }}" class="img-fluid rounded" alt="Karya 1">
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="{{ asset('images/contact-hero.jpg') }}" class="img-fluid rounded" alt="Karya 2">
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="{{ asset('images/contact-hero.jpg') }}" class="img-fluid rounded" alt="Karya 3">
            </div>
        </div>
        <a href="/portfolio" class="btn btn-outline-dark mt-4">Lihat Lebih Banyak</a>
    </div>
</section>

<!-- Services Section -->
<section class="py-5" style="background-color: #f7e9d7;">
    <div class="container text-center">
        <h3 class="fw-bold mb-5">Our Services</h3>
        <div class="row g-4">
            <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Desain Arsitektur dan Interior</h5>
                <p style="color: #7a5c3d;">Layanan desain tata ruang bangunan dan bagian dalamnya, mulai dari fasad, denah ruang, hingga tata letak furniture disesuaikan dengan kebutuhan dan gaya hidup.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Jasa Hitung RAB / Gambar Kerja</h5>
                <p style="color: #7a5c3d;">Menyediakan perhitungan Rencana Anggaran Biaya (RAB) proyek secara rinci, plus gambar kerja teknik yang siap digunakan oleh kontraktor di lapangan.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Jasa Pembuatan Furniture</h5>
                <p style="color: #7a5c3d;">Pembuatan furniture custom yang selaras dengan desain interior—baik untuk ruang tamu, dapur, kamar, maupun ruang ibadah di rumah.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Kontraktor dan Renovasi Bangunan</h5>
                <p style="color: #7a5c3d;">Pelaksanaan pembangunan dari desain yang telah dibuat—dengan tenaga ahli yang amanah dan profesional. Termasuk jasa renovasi total untuk bangunan lama.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Visualisasi Arsitektur dan Interior</h5>
                <p style="color: #7a5c3d;">Menyediakan tampilan visual 3D realistis dari desain yang dirancang—untuk memudahkan klien membayangkan hasil akhir sebelum pembangunan dimulai.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="text-decoration-none text-dark">
            <div class="bg-white p-4">
                <h5>Jasa Pelayanan Desain dari Jauh</h5>
                <p style="color: #7a5c3d;">Fokus pada perbaikan atau pembaruan rumah yang sudah ada. Bisa berupa pengubahan layout, penambahan ruangan, atau penyegaran tampilan rumah agar lebih nyaman.</p>
            </div>
        </a>
    </div>
        </div>
    </div>
</section>
@endsection


@push('styles')
    <style>
        .card {
            border: none;
            border-radius: 15px;
        }
    </style>
@endpush