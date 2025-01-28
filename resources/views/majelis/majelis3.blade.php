@extends('layouts.app')

@section('title', 'Majelis 1 PDM Kota Kuansing')

@section('content')
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Majelis Ekonomi Bisnis dan Pariwisata PDM Kota Kuansing</h1>
                        <p>Susunan Personalia Pimpinan dan Dewan Pengawas Syariah</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <section class="team-content py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-md-12 text-center">
                    <h2 class="mb-4 font-weight-bold">Susunan Pimpinan Majelis Ekonomi Bisnis dan Pariwisata</h2>
                    <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #3498db; margin: 0 auto;">
                    </div>
                    <p class="lead text-muted">
                        Mengenal para pemimpin yang membentuk visi dan masa depan Majelis Ekonomi Bisnis dan Pariwisata PDM
                        Kota Kuansing.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Ketua -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">Agus Alwi Mashuri, S.Sos, M. Kom.</h5>
                            <p class="text-muted">Ketua</p>
                        </div>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">H. Nur Sodiq, S.E</h5>
                            <p class="text-muted">Sekretaris</p>
                        </div>
                    </div>
                </div>

                <!-- Bendahara -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">H. Sarmadi, S.Ag, M. Pd.I</h5>
                            <p class="text-muted">Bendahara</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota -->
            <div class="row mt-5">
                <!-- Anggota 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">Anggota 1</h5>
                            <p class="text-muted">Anggota</p>
                        </div>
                    </div>
                </div>

                <!-- Anggota 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">Anggota 2</h5>
                            <p class="text-muted">Anggota</p>
                        </div>
                    </div>
                </div>

                <!-- Anggota 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg hover-shadow" style="height: 100%;">
                        <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="H. Sarmadi" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold text-dark">Anggota 3</h5>
                            <p class="text-muted">Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .hover-shadow:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .divider {
            margin-top: 10px;
            margin-bottom: 30px;
        }
    </style>

@endsection
