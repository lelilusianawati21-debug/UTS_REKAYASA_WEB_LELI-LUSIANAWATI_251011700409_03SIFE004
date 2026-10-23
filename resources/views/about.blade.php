@extends('layouts.app')

@section('content')

<div class="p-5 mb-5 rounded-4 text-white position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #2563eb 100%);">
    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary bg-opacity-75 text-light px-3 py-2 mb-3 rounded-pill fw-semibold tracking-wide">
                    ⚡ Platform Katalog Teknologi Terdepan
                </span>
                <h1 class="display-4 fw-bold mb-3 text-white">Tentang TechPulse</h1>
                <p class="lead text-light opacity-75">
                    Pusat referensi dan direktori digital independen yang menghadirkan wawasan mendalam mengenai inovasi gadget, perangkat komputasi, dan ekosistem teknologi terbaru masa kini.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white transition-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                        <span class="fs-4">🎯</span>
                    </div>
                    <h4 class="fw-bold text-dark m-0">Visi Kami</h4>
                </div>
                <p class="text-muted leading-relaxed">
                    Menjadi media katalis informasi teknologi terpercaya yang menghubungkan para penggiat *tech*, profesional, dan antusias gadget dengan perangkat inovatif terbaik untuk mendukung efisiensi kerja serta gaya hidup digital masa depan.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white transition-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                        <span class="fs-4">🚀</span>
                    </div>
                    <h4 class="fw-bold text-dark m-0">Misi Utama</h4>
                </div>
                <p class="text-muted leading-relaxed">
                    Menyajikan data rincian spesifikasi, ulasan performa, dan pembaruan tren perangkat secara transparan, terstruktur, serta mudah diakses oleh seluruh lapisan masyarakat modern.
                </p>
            </div>
        </div>
    </div>

    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm">
        <h3 class="fw-bold text-dark mb-4 text-center">💡 Kenapa Mengandalkan TechPulse?</h3>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col text-center">
                <div class="p-3">
                    <div class="fs-1 mb-2">🔎</div>
                    <h5 class="fw-bold">Spesifikasi Lengkap</h5>
                    <p class="text-muted small">Detail teknis mendalam mulai dari chipset, daya tahan baterai, opsi memori, hingga fitur konektivitas terbaru.</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="p-3">
                    <div class="fs-1 mb-2">⚡</div>
                    <h5 class="fw-bold">Informasi Teraktual</h5>
                    <p class="text-muted small">Update langsung seputar rilis perangkat flagship, ekosistem IoT, hingga komponen PC terkini.</p>
                </div>
            </div>
            <div class="col text-center">
                <div class="p-3">
                    <div class="fs-1 mb-2">📱</div>
                    <h5 class="fw-bold">Tampilan Responsif</h5>
                    <p class="text-muted small">Antarmuka bersih, cepat, dan nyaman diakses baik dari smartphone, tablet, maupun komputer desktop.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .transition-card {
        transition: transform 0.25s ease-in-out, 
        box-shadow 0.25s ease-in-out;
    }
    .transition-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1) !important;
    }
</style>
@endsection