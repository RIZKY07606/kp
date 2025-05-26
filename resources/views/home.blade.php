@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="position-relative">
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Hero" 
         class="img-fluid w-100 rounded" style="height: 400px; object-fit: cover;">
    <div class="position-absolute bottom-0 start-50 translate-middle-x text-white text-center p-4 w-100" 
         style="background: rgba(0, 0, 0, 0.4); border-bottom-left-radius: 0.75rem; border-bottom-right-radius: 0.75rem;">
        <h1 class="display-5 fw-bold">Wujudkan Hunian Syar'i<br>Untuk Anda dan Keluarga</h1>
    </div>
</div>



<section class="py-5">
    <div class="container">
        <h2 class="fw-bold">Arsitektur yang Mengedepankan Estetika dan Keberkahan - Muqshit Living</h2>
        <p class="mt-3">Persoalan pada desain arsitektur, interior dan furniture yang tidak memenuhi standar syar’i akan berdampak pada keberkahan hidup dan keluarga. Maka dari itu, kami hadir untuk membantu Anda membangun hunian dengan estetika tinggi sekaligus syar’i.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('images/rumah-modern.jpg') }}" class="img-fluid rounded" alt="Desain Rumah Modern">
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="mb-3"><strong>Desain Custom</strong><br>Kami mendesain sesuai kebutuhan, selera dan gaya hidup Anda.</li>
                    <li class="mb-3"><strong>Workshop & Produksi</strong><br>Kami memproduksi langsung dengan tenaga profesional di workshop kami.</li>
                    <li class="mb-3"><strong>Shariah Based Architecture</strong><br>Berlandaskan syariat Islam untuk menciptakan hunian yang penuh keberkahan.</li>
                    <li class="mb-3"><strong>Desain Berkualitas Syariah</strong><br>Kami memastikan tiap aspek desain memperhatikan kaidah dan nilai Islam.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h3 class="fw-bold mb-5">Dokumentasi Karya Kami</h3>
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <img src="/images/karya1.jpg" class="img-fluid rounded" alt="Karya 1">
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="/images/karya2.jpg" class="img-fluid rounded" alt="Karya 2">
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="/images/karya3.jpg" class="img-fluid rounded" alt="Karya 3">
            </div>
        </div>
        <a href="#" class="btn btn-outline-dark mt-4">Lihat Lebih Banyak</a>
    </div>
</section>

<!-- Services Section -->
<section class="py-5" style="background-color: #f7e9d7;">
    <div class="container text-center">
        <h3 class="fw-bold mb-5">Our Services</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Desain Arsitektur dan Interior</h5>
                    <p style="color: #7a5c3d;">Layanan desain tata ruang bangunan dan bagian dalamnya, mulai dari fasad, denah ruang, hingga tata letak furniture disesuaikan dengan kebutuhan dan gaya hidup.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Jasa Hitung RAB / Gambar Kerja</h5>
                    <p style="color: #7a5c3d;">Menyediakan perhitungan Rencana Anggaran Biaya (RAB) proyek secara rinci, plus gambar kerja teknik yang siap digunakan oleh kontraktor di lapangan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Jasa Pembuatan Furniture</h5>
                    <p style="color: #7a5c3d;">Pembuatan furniture custom yang selaras dengan desain interior-baik untuk ruang tamu, dapur, kamar, maupun ruang ibadah di rumah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Kontraktor dan Renovasi Bangunan</h5>
                    <p style="color: #7a5c3d;">Pelaksanaan pembangunan dari desain yang telah dibuat-dengan tenaga ahli yang amanah dan profesional. Termasuk jasa renovasi total untuk bangunan lama.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Visualisasi Arsitektur dan Interior</h5>
                    <p style="color: #7a5c3d;">Menyediakn tampilan visual 3D realistis dari desain yang dirancang-untuk memudahkan klien membayangkan hasil akhir sebelum pembangunan dimulai.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded shadow-sm h-100">
                    <h5>Jasa Pelayanan Desain dari Jauh</h5>
                    <p style="color: #7a5c3d;">Fokus pada perbaikan atau pembaruan rumah yang sudah ada. Bisa berupa pengubahan layout, penambahan ruangan, atau penyegaran tampilan rumah agar lebih nyaman.</p>
                </div>
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