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
.skematik-link, .ded-link {
    color: #8B7B69;
    text-decoration: underline;
    cursor: pointer;
    font-weight: 600;
}
.skematik-modal-bg {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0; top: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.3);
    justify-content: center;
    align-items: center;
}
.skematik-modal-bg.active {
    display: flex;
}
.skematik-modal {
    background: #fff;
    border-radius: 18px;
    padding: 2rem 2.5rem;
    max-width: 600px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    position: relative;
}
.skematik-modal h4 {
    font-weight: bold;
    margin-bottom: 1rem;
}
.skematik-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}
.skematik-col {
    background: #FAF6F0;
    border-radius: 12px;
    padding: 1rem 1.2rem;
    min-width: 120px;
}
.skematik-modal .close-btn {
    position: absolute;
    top: 10px;
    right: 18px;
    font-size: 1.5rem;
    color: #8B7B69;
    background: none;
    border: none;
    cursor: pointer;
}
.ded-modal-bg {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0; top: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.3);
    justify-content: center;
    align-items: center;
}
.ded-modal-bg.active {
    display: flex;
}
.ded-modal {
    background: #fff;
    border-radius: 18px;
    padding: 2rem 2.5rem;
    max-width: 900px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    position: relative;
}
.ded-modal h4 {
    font-weight: bold;
    margin-bottom: 1rem;
}
.ded-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}
.ded-col {
    background: #FAF6F0;
    border-radius: 12px;
    padding: 1rem 1.2rem;
    min-width: 200px;
}
.ded-modal .close-btn {
    position: absolute;
    top: 10px;
    right: 18px;
    font-size: 1.5rem;
    color: #8B7B69;
    background: none;
    border: none;
    cursor: pointer;
}
@media (max-width: 900px) {
    .ded-modal { max-width: 98vw; }
    .ded-grid { grid-template-columns: 1fr; }
}
@media (max-width: 700px) {
    .skematik-modal { max-width: 98vw; }
    .skematik-grid { grid-template-columns: 1fr; }
}

.hero-container {
  position: relative;
  width: 1312px;
  max-width: 100%;
  height: 400px;
  border-radius: 64px;
  overflow: hidden;
  margin-bottom: 2rem;
  margin-left: auto;
  margin-right: auto;
}


.hero-image {
  width: 1312px;
  max-width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: 64px;
}

.hero-title {
  position: absolute;
  bottom: 24px;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  font-size: 3rem;
  font-weight: 700;
  text-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
  margin: 0;
}


</style>
@endpush

@section('content')
<div class="hero-container">
  <img src="/images/contact-hero.jpg" alt="Service" class="hero-image">
  <h1 class="hero-title">Service</h1>
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
        <label><input type="checkbox" name="rab-lantai" value="1" checked> Lantai 1</label>
        <label><input type="checkbox" name="rab-lantai" value="2"> Lantai 2</label>
        <label><input type="checkbox" name="rab-lantai" value="3"> Lantai 3</label>
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
        <b>Paket Utama</b>
        <label><input type="radio" name="ad-paket" value="A" checked> Paket A - <span class="skematik-link" id="showSkematik">Skematik</span> (Rp 39.000/m²)</label>
        <label><input type="radio" name="ad-paket" value="B"> Paket B - <span class="ded-link" id="showDED">DED</span> (Rp 49.000/m²)</label>
        <label><input type="radio" name="ad-paket" value="C"> Paket C - <span class="skematik-link" id="showSkematik2">Skematik</span> + <span class="ded-link" id="showDED2">DED</span> (Rp 79.000/m²)</label>
    </div>
    <div class="service-radio-group">
        <b>Add-on</b>
        <label><input type="checkbox" name="ad-jenis" value="3d"> Animasi 3D (Rp 700.000)</label>
        <label><input type="checkbox" name="ad-jenis" value="render"> Rendering (2 View) (Rp 350.000)</label>
        <label><input type="checkbox" name="ad-jenis" value="rab"> RAB + Time Schedule (Rp 39.000/m²)</label>
    </div>
    <label>Hasil Perhitungan</label>
    <div class="service-result" id="ad-hasil">-</div>
    <button type="button" class="service-calc-btn" onclick="hitungAD()">Kalkulasi</button>
</form>
</div>
<div class="skematik-modal-bg" id="skematikModal">
    <div class="skematik-modal">
        <button class="close-btn" id="closeSkematik">&times;</button>
        <h4>Lingkup Pekerjaan Desain Skematik</h4>
        <div class="skematik-grid">
            <div class="skematik-col">
                <b>A</b>
                <ul>
                    <li>Gambar Arsitektur</li>
                    <li>Denah</li>
                    <li>Tampak (Depan, Belakang, Kiri, Dan Kanan)</li>
                </ul>
            </div>
            <div class="skematik-col">
                <b>B</b>
                <ul>
                    <li>Gambar 3D Visual</li>
                    <li>Gambar 3D Rendering Exterior</li>
                </ul>
            </div>
            <div class="skematik-col">
                <b>C</b>
                <ul>
                    <li>Revisi:</li>
                    <li>Denah (2x)</li>
                    <li>3D (1x)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ded-modal-bg" id="dedModal">
    <div class="ded-modal">
        <button class="close-btn" id="closeDED">&times;</button>
        <h4>Lingkup Pekerjaan Gambar Kerja (DED)</h4>
        <div class="ded-grid">
            <div class="ded-col">
                <b>A</b>
                <ul>
                    <li>Gambar Arsitektur</li>
                    <li>Layout Plan</li>
                    <li>Site Plan</li>
                    <li>Denah</li>
                    <li>Tampak (Depan, Belakang, Kiri, Dan Kanan)</li>
                    <li>Potongan (Melintang Dan Membujur)</li>
                    <li>Rencana Kusen, Pintu, Jendela, Penutup Lantai, Plafon, Dan Atap</li>
                    <li>Detail Kusen, Pintu, Jendela, Atap, Kamar Mandi, dan Arsitektural</li>
                </ul>
            </div>
            <div class="ded-col">
                <b>B</b>
                <ul>
                    <li>Gambar Struktur</li>
                    <li>Rencana Pondasi</li>
                    <li>Rencana Sloof</li>
                    <li>Rencana Kolom</li>
                    <li>Rencana Balok</li>
                    <li>Rencana Balok Ring</li>
                    <li>Rencana Dag Plat Lantai</li>
                    <li>Detail Penulangan</li>
                </ul>
                <b>C</b>
                <ul>
                    <li>Gambar MEP (Mekanikal, Elektrikal, Dan Plumbing)</li>
                    <li>Rencana Air Bersih</li>
                    <li>Rencana Air Kotor</li>
                    <li>Rencana Drainase Air Hujan</li>
                    <li>Rencana Listrik (Titik Lampu, Saklar, AC, TV, Dan Internet)</li>
                </ul>
            </div>
            <div class="ded-col">
                <b>D</b>
                <ul>
                    <li>Gambar 3D Visual</li>
                    <li>Gambar 3D Skematik Desain (.SKP)</li>
                    <li>Gambar 3D Rendering Exterior</li>
                </ul>
                <b>E</b>
                <ul>
                    <li>Files</li>
                    <li>Soft Copy DED (.PDF)</li>
                    <li>DWG Files</li>
                    <li>3D Sketchup Files</li>
                </ul>
                <b>F</b>
                <ul>
                    <li>Revisi</li>
                    <li>Denah (3x)</li>
                    <li>3D (3x)</li>
                </ul>
            </div>
        </div>
    </div>
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
    const lantaiCheckboxes = document.querySelectorAll('input[name="rab-lantai"]:checked');
    if (luas === 0 || lantaiCheckboxes.length === 0) {
        document.getElementById('rab-hasil').innerText = '-';
        return;
    }
    let hasilList = [];
    let totalAll = 0;
    lantaiCheckboxes.forEach(cb => {
        let harga = 0;
        let label = '';
        if (cb.value == '1') { harga = 3750000; label = 'Lantai 1'; }
        else if (cb.value == '2') { harga = 4200000; label = 'Lantai 2'; }
        else { harga = 4500000; label = 'Lantai 3'; }
        const total = luas * harga;
        totalAll += total;
        hasilList.push(label + ': ' + formatRupiah(total));
    });
    hasilList.push('<b>Total: ' + formatRupiah(totalAll) + '</b>');
    document.getElementById('rab-hasil').innerHTML = hasilList.join('<br>');
}

function hitungAD() {
    const panjang = parseFloat(document.getElementById('ad-panjang').value) || 0;
    const lebar = parseFloat(document.getElementById('ad-lebar').value) || 0;
    const luas = panjang * lebar;
    const paket = document.querySelector('input[name="ad-paket"]:checked').value;
    const jenisCheckboxes = document.querySelectorAll('input[name="ad-jenis"]:checked');
    if (!paket || luas === 0) {
        document.getElementById('ad-hasil').innerText = '-';
        return;
    }
    let hasilList = [];
    let totalAll = 0;
    // Paket utama
    let hargaPaket = 0;
    let labelPaket = '';
    if (paket === 'A') { hargaPaket = 39000; labelPaket = 'Paket A - Skematik'; }
    else if (paket === 'B') { hargaPaket = 49000; labelPaket = 'Paket B - DED'; }
    else if (paket === 'C') { hargaPaket = 79000; labelPaket = 'Paket C - Skematik + DED'; }
    const totalPaket = hargaPaket * luas;
    hasilList.push(labelPaket + ' (' + formatRupiah(hargaPaket) + ' x ' + luas + ' m²): ' + formatRupiah(totalPaket));
    totalAll += totalPaket;
    // Add-on
    if (jenisCheckboxes.length > 0) {
        hasilList.push('<b>Add-on:</b>');
        jenisCheckboxes.forEach(cb => {
            let hasil = 0;
            let label = '';
            if (cb.value === '3d') { hasil = 700000; label = 'Animasi 3D'; }
            else if (cb.value === 'render') { hasil = 350000; label = 'Rendering (2 View)'; }
            else if (cb.value === 'rab') { hasil = 39000 * luas; label = 'RAB + Time Schedule (' + luas + ' m²)'; }
            totalAll += hasil;
            hasilList.push(label + ': ' + formatRupiah(hasil));
        });
    }
    hasilList.push('<b>Total: ' + formatRupiah(totalAll) + '</b>');
    document.getElementById('ad-hasil').innerHTML = hasilList.join('<br>');
}

document.getElementById('showSkematik').onclick = function() {
    document.getElementById('skematikModal').classList.add('active');
};
document.getElementById('closeSkematik').onclick = function() {
    document.getElementById('skematikModal').classList.remove('active');
};
document.getElementById('showDED').onclick = function() {
    document.getElementById('dedModal').classList.add('active');
};
document.getElementById('showDED2').onclick = function() {
    document.getElementById('dedModal').classList.add('active');
};
document.getElementById('closeDED').onclick = function() {
    document.getElementById('dedModal').classList.remove('active');
};
document.getElementById('showSkematik2').onclick = function() {
    document.getElementById('skematikModal').classList.add('active');
};

// Skematik modal close by background click
const skematikModalBg = document.getElementById('skematikModal');
skematikModalBg.addEventListener('click', function(e) {
    if (e.target === skematikModalBg) {
        skematikModalBg.classList.remove('active');
    }
});
// DED modal close by background click
const dedModalBg = document.getElementById('dedModal');
dedModalBg.addEventListener('click', function(e) {
    if (e.target === dedModalBg) {
        dedModalBg.classList.remove('active');
    }
});
</script>
@endpush
@endsection 