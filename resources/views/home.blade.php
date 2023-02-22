@extends('layouts.main')
@section('container')
    <div class="row">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/teljkt1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/navbar.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <p>
        <p>
        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">World</strong>
                    <h3 class="mb-0">Corona Virus</h3>
                    <div class="mb-1 text-muted">March,11 2022</div>
                    <p class="mb-auto">The Corona virus has claimed the lives of millions of people worldwide.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="img/poster corona.jpeg" width="200" height="250" role="img"
                        aria-label="Placeholder: Thumbnail" focusable="false">
                    <title>Placeholder</title>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">We Are Hiring</strong>
                    <h3 class="mb-0">Hiring a Job</h3>
                    <div class="mb-1 text-muted">Feb,22 2022</div>
                    <p class="mb-auto">If anyone is interested, please contact us further..</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="img/Now Hiring.jpg" width="200" height="250" role="img"
                        aria-label="Placeholder: Thumbnail" margin-left="10px" focusable="false">
                    <title>Placeholder</title>
                </div>
            </div>
        </div>
    </div>
    <p>
    <div class="col-12">
        <Article>
            <h1 class="fw-bold mb-2">E-Lapor SMK Telkom Jakarta</h1>
            <p>Selamat Datang para siswa-siswi SMK Telkom Jakarta di website E-Lapor SMK Telkom Jakarta. E-Lapor yang baru saja diresmikan oleh SMK Telkom Jakarta yang berguna untuk menampung aspirasi khususnya para siswa SMK Telkom Jakarta.  </p>
            <p>Semoga dengan adanya website E-Lapor ini sebagai jembatan penghubung antara siswa dengan pihak sekolah. Silahkan ajukan aspirasi anda kepada kami.</p>
        </Article>

    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-danger fw-bold">Yuk Ajukan Aspirasi</a>
    </div>
    </div>
@endsection
