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

    .hero-section {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        gap: 48px;
        margin-top: 48px;
        margin-bottom: 48px;
    }
    .hero-left {
        display: flex;
        flex-direction: column;
        width: 501px;
        min-width: 0;
        gap: 24px;
    }
    .hero-title {
        font-family: 'Nunito', Arial, sans-serif;
        font-weight: 700;
        font-size: 40px;
        line-height: 56px;
        letter-spacing: 0;
        color: #000;
    }
    .hero-img {
        width: 1312px;
        max-width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 64px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .hero-right {
        display: flex;
        flex-direction: column;
        width: 571px;
        min-width: 0;
        gap: 24px;
    }
    .hero-desc {
        font-family: 'Nunito', Arial, sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 27px;
        letter-spacing: 0;
        color: #8B7B69;
    }
    .hero-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px 32px;
    }
    .hero-feature-item {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        gap: 12px;
    }
    .hero-feature-icon {
        font-size: 1.5rem;
        color: #8B7B69;
        margin-top: 2px;
        min-width: 28px;
    }
    .hero-feature-title {
        font-family: 'Nunito', Arial, sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 27px;
        color: #8B7B69;
        margin-bottom: 2px;
    }
    .hero-feature-desc {
        font-family: 'Nunito', Arial, sans-serif;
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        color: #8B7B69;
        margin: 0;
    }
    @media (max-width: 1200px) {
        .hero-section { flex-direction: column; align-items: center; gap: 32px; }
        .hero-left, .hero-right { width: 100%; max-width: 700px; }
        .hero-img { width: 100%; }
    }
</style>


@section('content')
<div class="position-relative">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100"
         style="width: 1312px; max-width: 100%; height: 400px; object-fit: cover; border-radius: 64px; display: block; margin-left: auto; margin-right: auto;">
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
                <h2 class="fw-bold mb-4" style="max-width: 501px; width: 100%; text-align: left;">
                    Arsitektur yang <br>
                    Mengedepankan Estetika <br>
                    dan Keberkahan – Muqshit Living
                </h2>
                <img src="images/contact-hero.jpg" alt="Desain Rumah Modern"
     class="mt-3" style="width: 501px; max-width: 100%; height: 264px; object-fit: cover; border-radius: 40px; display: block;">
            </div>

            <!-- KANAN: Deskripsi + Fitur -->
            <div class="col-lg-6">
                <p class="fitur-desain">
                    Perusahaan jasa desain arsitektur interior dan kontraktor yang bisa memberikan hasil maksimal, efisien, ramah lingkungan, dan insyaAllah mengamalkan syariat Islam dan semua pekerjanya. Kami mengintegrasikan prinsip desain modern dengan nilai-nilai syar'i, demi menghadirkan hunian yang menenangkan, nyaman, dan penuh keberkahan.
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

@php
    $portfolios = \App\Models\Portfolio::latest()->take(4)->get();
@endphp
<!-- Dokumentasi Karya Kami Section -->
<section class="dokumentasi-section" style="background:#fff; padding:56px 0 32px 0;">
    <div class="container" style="max-width:1400px;">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="fw-bold" style="font-family:'Nunito',Arial,sans-serif; font-size:2.5rem; color:#111; margin-bottom:0;">Dokumentasi Karya Kami</h2>
            <a href="/portfolio" class="btn btn-sm" style="background:#8B7B69; color:#fff; font-family:'Nunito',Arial,sans-serif; font-weight:600; border-radius:24px; padding:10px 32px; font-size:1.1rem;">Lihat Lainnya</a>
            </div>
        <div class="dokumentasi-grid" style="display:grid; grid-template-columns:repeat(4,1fr); gap:0;">
            @foreach($portfolios as $portfolio)
                <a href="/portfolio?highlight={{ $portfolio->id }}" style="overflow:hidden; border-radius:24px; display:block;">
                    <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" style="width:100%; height:320px; object-fit:cover; border-radius:24px; display:block;" />
                </a>
            @endforeach
        </div>
    </div>
</section>
<style>
.dokumentasi-section h2 {
    font-family: 'Nunito', Arial, sans-serif;
    font-weight: 700;
    font-size: 2.5rem;
    color: #111;
}
@media (max-width: 1200px) {
    .dokumentasi-grid { grid-template-columns: repeat(2,1fr) !important; }
}
@media (max-width: 700px) {
    .dokumentasi-grid { grid-template-columns: 1fr !important; }
    .dokumentasi-section h2 { font-size: 1.5rem; }
}
</style>

<!-- Google Fonts Nunito -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700;600&display=swap" rel="stylesheet">
<style>
.services-section {
    background: #f7e3cb;
    padding: 64px 0 72px 0;
}
.services-title {
    font-family: 'Nunito', Arial, sans-serif;
    font-weight: 700;
    font-size: 2.8rem;
    color: #000;
    margin-bottom: 48px;
    text-align: left;
    margin-left: 2.5vw;
}
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px 36px;
    justify-content: center;
}
@media (max-width: 900px) {
    .services-grid { grid-template-columns: 1fr; gap: 28px; }
    .services-title { font-size: 2rem; margin-left: 0; text-align: center; }
}
.service-card {
    background: #fff;
    border-radius: 40px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    padding: 40px 24px 32px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 200px;
    max-width: 368px;
    width: 100%;
    transition: box-shadow 0.2s;
}
.service-card:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.13);
}
.service-icon {
    font-size: 2.5rem;
    margin-bottom: 18px;
    color: #7a6b53;
    height: 40px;
}
.service-card-title {
    font-family: 'Nunito', Arial, sans-serif;
    font-weight: 700;
    font-size: 1.18rem;
    color: #222;
    margin-bottom: 12px;
    text-align: center;
}
.service-card-desc {
    color: #8d8d8d;
    font-size: 1rem;
    text-align: center;
    margin: 0;
}
</style>
<!-- Services Section -->
<section class="services-section" style="width:100vw; position:relative; left:50%; right:50%; margin-left:-50vw; margin-right:-50vw;">
    <div class="container">
        <div class="services-title">Our Services</div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/pen-ruler-solid.svg" alt="Desain Arsitektur dan Interior" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
                </div>
                <div class="service-card-title">Desain Arsitektur dan Interior</div>
                <div class="service-card-desc">Layanan desain tata ruang bangunan dan bagian dalamnya, mulai dari fasad, denah ruang, hingga tata letak furniture-disesuaikan dengan kebutuhan dan gaya hidup.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/calculator.svg" alt="Jasa Hitung RAB / Gambar Kerja" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
    </div>
                <div class="service-card-title">Jasa Hitung RAB / Gambar Kerja</div>
                <div class="service-card-desc">Menyediakan perhitungan Rencana Anggaran Biaya (RAB) proyek secara rinci, plus gambar kerja teknik yang siap digunakan oleh kontraktor di lapangan.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/sofa-solid.svg" alt="Jasa Pembuatan Furniture" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
    </div>
                <div class="service-card-title">Jasa Pembuatan Furniture</div>
                <div class="service-card-desc">Pembuatan furniture custom yang selaras dengan desain interior-baik untuk ruang tamu, dapur, kamar, maupun ruang ibadah di rumah.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/helmet-safety-solid.svg" alt="Kontraktor dan Renovasi bangunan" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
    </div>
                <div class="service-card-title">Kontraktor dan Renovasi bangunan</div>
                <div class="service-card-desc">Pelaksanaan pembangunan dari desain yang telah dibuat-dengan tenaga ahli yang amanah dan profesional. Termasuk jasa renovasi total untuk bangunan lama.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/cube-solid.svg" alt="Visualisasi Arsitektur dan Interior" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
    </div>
                <div class="service-card-title">Visualisasi Arsitektur dan Interior</div>
                <div class="service-card-desc">Menyediakan tampilan visual 3D realistis dari desain yang dirancang-untuk memudahkan klien membayangkan hasil akhir sebelum pembangunan dimulai.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <img src="/images/Vector.svg" alt="Renovasi Rumah" style="height:40px; width:40px; object-fit:contain; display:block; margin:0 auto;" />
    </div>
                <div class="service-card-title">Jasa Renovasi Rumah</div>
                <div class="service-card-desc">Fokus pada perbaikan atau pembaruan rumah yang sudah ada. Bisa berupa pengubahan layout, penambahan ruangan, atau penyegaran tampilan rumah agar lebih nyaman.</div>
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