@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">&larr; Kembali ke Katalog</a>
    </div>

    <div class="card shadow-sm border-0 p-4 bg-white">
        <div class="row g-4 align-items-center">
            <div class="col-md-5 text-center">
                <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid rounded border p-2" style="max-height: 350px; object-fit: contain;" alt="{{ $product->name }}">
            </div>
            <div class="col-md-7">
                <span class="badge bg-primary mb-2">{{ $product->brand }}</span>
                <h2 class="fw-bold">{{ $product->name }}</h2>
                <h4 class="text-success fw-bold mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h4>
                <p class="text-muted"><strong>Tanggal Rilis:</strong> {{ $product->release_date }}</p>
                <hr>
                <h5>Spesifikasi Utama:</h5>
                <p class="bg-light p-3 rounded border font-monospace small">{{ $product->specs }}</p>
                <h5>Deskripsi Produk:</h5>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection