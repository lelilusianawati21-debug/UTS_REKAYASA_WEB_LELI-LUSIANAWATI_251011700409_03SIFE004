@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border rounded-4 bg-white p-4">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-3 mb-md-0 border-end-md">
                        <img src="{{ asset('assets/images/profil.jpeg') }}" 
                             alt="Foto Profil Mahasiswa" 
                             class="img-fluid rounded-circle border p-1 shadow-sm mb-2" 
                             style="width: 160px; height: 160px; object-fit: cover;">
                        <h5 class="fw-bold text-dark m-0">Leli Lusianawati</h5>
                        <small class="text-primary fw-semibold">NIM: 251011700409</small>
                    </div>

                    <div class="col-md-8 ps-md-4">
                        <h5 class="fw-bold text-dark border-bottom pb-2 mb-3">
                            📋 Informasi Pengembang
                        </h5>

                        <table class="table table-borderless table-sm mb-0">
                            <tbody>
                                <tr>
                                    <td class="text-muted" style="width: 35%;">Nama Lengkap</td>
                                    <td class="fw-bold text-dark">: Leli Lusianawati</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">NIM</td>
                                    <td class="fw-bold text-primary">: 251011700409</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Program Studi</td>
                                    <td class="fw-bold text-dark">: Sistem Informasi S-1</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Fakultas</td>
                                    <td class="fw-bold text-dark">: Ilmu Komputer</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Perguruan Tinggi</td>
                                    <td class="fw-bold text-dark">: Universitas Pamulang</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Mata Kuliah</td>
                                    <td class="fw-bold text-dark">: Rekayasa Web</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="border-top mt-4 pt-3 text-center text-muted small">
                    Ujian Tengah Semester &bull; Rekayasa Web 2026/2027
                </div>
            </div>
        </div>
    </div>
</div>
@endsection