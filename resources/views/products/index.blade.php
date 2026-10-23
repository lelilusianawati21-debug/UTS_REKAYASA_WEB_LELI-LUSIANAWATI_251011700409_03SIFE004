@extends('layouts.app')

@section('content')

<div class="p-5 mb-5 rounded-4 text-white position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #2563eb 100%);">
    <div class="container py-3 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary bg-opacity-75 text-light px-3 py-2 mb-3 rounded-pill fw-semibold tracking-wide">
                    💻 Katalog Resmi TechPulse
                </span>
                <h1 class="display-5 fw-bold mb-2 text-white">Semua Produk Teknologi</h1>
                <p class="lead text-light mb-0 opacity-75">Jelajahi seluruh koleksi gadget, laptop, smartphone, dan perangkat teknologi mutakhir pilihan Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <h4 class="fw-bold text-dark m-0">
            📦 Total Perangkat: <span class="text-primary">{{ count($products) }}</span>
        </h4>
        <span class="text-muted small">Menampilkan seluruh koleksi data terdaftar</span>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 transition-card bg-white overflow-hidden">
                    <div class="p-3 text-center bg-light position-relative" style="height: 220px;">
                        <span class="badge bg-dark bg-opacity-75 position-absolute top-0 start-0 m-3 px-2 py-1 small z-1">
                            {{ $product->brand }}
                        </span>
                        <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid h-100 w-100 object-fit-contain p-2" alt="{{ $product->name }}">
                    </div>

                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold text-dark mb-2 text-truncate">{{ $product->name }}</h5>
                        
                        <div class="mb-2">
                            <span class="text-primary fw-bold fs-5">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>

                        <p class="card-text text-muted small mb-4" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; min-height: 38px;">
                            {{ $product->description }}
                        </p>

                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-outline-dark rounded-pill w-100 fw-semibold mt-auto">
                            Lihat Detail Spesifikasi &rarr;
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
        transform: translateY(-6px);
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.12) !important;
    }
</style>
@endsection