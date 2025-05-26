@extends('layouts.app')

@section('title', 'Service')

@push('styles')
<style>
.service-hero-container {
    position: relative;
    margin-bottom: 2rem;
}
.service-hero {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 48px;
    margin-bottom: 2rem;
}
.service-title {
    position: absolute;
    left: 50%;
    top: 60%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 2.5rem;
    font-weight: bold;
    text-shadow: 0 2px 16px rgba(0,0,0,0.3);
}
.service-tabs {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}
.service-tab {
    flex: 1;
    padding: 0.7rem 0;
    border-radius: 32px;
    border: 2px solid #B7A590;
    background: #B7A590;
    color: #fff;
    font-weight: 500;
    text-align: center;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
}
.service-tab.inactive {
    background: #fff;
    color: #B7A590;
    border: 2px solid #B7A590;
}
.service-form {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
}
.service-input, .service-result {
    background: #F3E8DC;
    border: none;
    border-radius: 16px;
    padding: 0.8rem 1.2rem;
    font-size: 1rem;
    width: 100%;
    margin-bottom: 0.2rem;
}
.service-radio-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
}
.service-calc-btn {
    background: #8B7B69;
    color: #fff;
    border: none;
    border-radius: 32px;
    padding: 0.8rem 0;
    font-size: 1.1rem;
    font-weight: 500;
    width: 100%;
    margin-top: 0.5rem;
    cursor: pointer;
    transition: background 0.2s;
}
.service-calc-btn:hover {
    background: #756857;
}
@media (max-width: 600px) {
    .service-hero {
        height: 160px;
        border-radius: 20px;
    }
    .service-title {
        font-size: 1.3rem;
    }
}
</style>
@endpush

@section('content')
<div class="service-hero-container">
    <img src="/images/contact-hero.jpg" alt="Service Hero" class="service-hero">
    <div class="service-title">Service</div>
</div>
<div class="service-tabs">
    <div class="service-tab" id="tab-rab">Rencana Anggaran Biaya</div>
    <div class="service-tab inactive" id="tab-ad">Anggaran Desain</div>
</div>
<div id="form-rab">
<form class="service-form" id="rab-form" onsubmit="return false;">
    <label>Panjang Bangunan</label>
    <input type="number" class="service-input" id="rab-panjang" placeholder="panjang">
    <label>Lebar Bangunan</label>
    <input type="number" class="service-input" id="rab-lebar" placeholder="lebar">
    <div class="service-radio-group">
        <label><input type="radio" name="rab-lantai" value="1" checked> Lantai 1</label>
        <label><input type="radio" name="rab-lantai" value="2"> Lantai 2</label>
        <label><input type="radio" name="rab-lantai" value="3"> Lantai 3</label>
    </div>
    <label>Hasil Perhitungan</label>
    <div class="service-result" id="rab-hasil">-</div>
    <button type="button" class="service-calc-btn" onclick="hitungRAB()">Kalkulasi</button>
</form>
</div>
<div id="form-ad" style="display:none;">
<form class="service-form" id="ad-form" onsubmit="return false;">
    <label>Panjang Bangunan</label>
    <input type="number" class="service-input" id="ad-panjang" placeholder="panjang">
    <label>Lebar Bangunan</label>
    <input type="number" class="service-input" id="ad-lebar" placeholder="lebar">
    <div class="service-radio-group">
        <label><input type="radio" name="ad-jenis" value="3d" checked> Animasi 3D</label>
        <label><input type="radio" name="ad-jenis" value="render"> Rendering (2 View)</label>
        <label><input type="radio" name="ad-jenis" value="rab"> RAB + Time Schedule</label>
    </div>
    <label>Hasil Perhitungan</label>
    <div class="service-result" id="ad-hasil">-</div>
    <button type="button" class="service-calc-btn" onclick="hitungAD()">Kalkulasi</button>
</form>
</div>
@push('scripts')
<script>
const tabRAB = document.getElementById('tab-rab');
const tabAD = document.getElementById('tab-ad');
const formRAB = document.getElementById('form-rab');
const formAD = document.getElementById('form-ad');

tabRAB.addEventListener('click', function() {
    tabRAB.classList.remove('inactive');
    tabAD.classList.add('inactive');
    formRAB.style.display = '';
    formAD.style.display = 'none';
});

tabAD.addEventListener('click', function() {
    tabAD.classList.remove('inactive');
    tabRAB.classList.add('inactive');
    formAD.style.display = '';
    formRAB.style.display = 'none';
});

function formatRupiah(angka) {
    return 'Rp ' + angka.toLocaleString('id-ID');
}

function hitungRAB() {
    const panjang = parseFloat(document.getElementById('rab-panjang').value) || 0;
    const lebar = parseFloat(document.getElementById('rab-lebar').value) || 0;
    const luas = panjang * lebar;
    const lantai = document.querySelector('input[name="rab-lantai"]:checked').value;
    let harga = 0;
    if (lantai == '1') harga = 3750000;
    else if (lantai == '2') harga = 4200000;
    else harga = 4500000;
    const total = luas * harga;
    document.getElementById('rab-hasil').innerText = luas > 0 ? formatRupiah(total) : '-';
}

function hitungAD() {
    const panjang = parseFloat(document.getElementById('ad-panjang').value) || 0;
    const lebar = parseFloat(document.getElementById('ad-lebar').value) || 0;
    const luas = panjang * lebar;
    const jenis = document.querySelector('input[name="ad-jenis"]:checked').value;
    let hasil = '-';
    if (jenis === '3d') hasil = 'Rp 700.000';
    else if (jenis === 'render') hasil = 'Rp 350.000';
    else if (jenis === 'rab') hasil = luas > 0 ? 'Rp ' + (luas * 39000).toLocaleString('id-ID') : '-';
    document.getElementById('ad-hasil').innerText = hasil;
}
</script>
@endpush
@endsection 