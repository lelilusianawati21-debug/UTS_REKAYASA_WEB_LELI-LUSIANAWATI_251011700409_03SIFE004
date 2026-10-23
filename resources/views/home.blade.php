@extends('layouts.app')

@section('content')

<div class="p-5 mb-5 rounded-4 text-white position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #3b82f6 100%);">
    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary bg-opacity-75 text-light px-3 py-2 mb-3 rounded-pill fw-semibold tracking-wide">
                    ⚡ Inovasi Teknologi Masa Kini 2026
                </span>
                <h1 class="display-4 fw-bold mb-3 text-white">Eksplorasi Masa Depan Bersama TechPulse</h1>
                <p class="lead text-light mb-4 opacity-75">Pusat katalog perangkat teknologi, gadget mutakhir, dan ulasan spesifikasi terakurat untuk menunjang gaya hidup digital Anda.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('products') }}" class="btn btn-light text-dark fw-bold px-4 py-2 rounded-pill shadow-sm">
                        Jelajahi Katalog &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="mb-4 border-bottom pb-3">
        <h3 class="fw-bold text-dark m-0">🔥 Produk Unggulan Terbaru</h3>
        <p class="text-muted small m-0">Pilihan perangkat teknologi terbaik yang paling banyak dicari minggu ini.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($featuredProducts as $product)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 transition-card bg-white">
                    <div class="p-3 text-center bg-light rounded-top-4 position-relative" style="height: 200px;">
                        <span class="badge bg-dark bg-opacity-75 position-absolute top-0 start-0 m-3 px-2 py-1 small z-1">
                            {{ $product->brand }}
                        </span>
                        <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid h-100 w-100 object-fit-contain p-2" alt="{{ $product->name }}">
                    </div>

                    <div class="card-body d-flex flex-column p-4">
                        <h6 class="card-title fw-bold text-dark mb-2 text-truncate">{{ $product->name }}</h6>
                        <p class="text-primary fw-bold mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-outline-dark btn-sm rounded-pill mt-auto fw-semibold">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .transition-card {
        transition: transform 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
    }
    .transition-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
</style>
@endsection