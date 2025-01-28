@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Struktur Organisasi</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <section class="organization-structure py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-md-12 text-center">
                    <h2 class="mb-4 font-weight-bold" data-aos="zoom-in" data-aos-duration="1000">Struktur Organisasi Kami
                    </h2>
                    <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #3498db; margin: 0 auto;"
                        data-aos="zoom-in"></div>
                    <p class="lead" data-aos="fade-up" data-aos-duration="1200">
                        Jelajahi hierarki dan peran dalam organisasi kami.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <img src="{{ asset('images/pimpinan/struktur.jpg') }}" alt="Struktur Organisasi"
                        class="img-fluid shadow-lg" data-aos="zoom-in" data-aos-duration="1200">
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <!-- Kolom 1: Ketua -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-crown fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Ketua</h5>
                            <p class="text-muted">Pemimpin organisasi yang bertanggung jawab atas pengambilan keputusan
                                strategis dan memastikan visi dan misi organisasi tercapai.</p>
                        </div>
                    </div>
                    <!-- Kolom 2: Wakil Ketua -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-user-tie fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Wakil Ketua</h5>
                            <p class="text-muted">Mendampingi ketua dan siap menggantikan ketua jika diperlukan. Bertanggung
                                jawab dalam hal koordinasi antar seksi dan pengambilan keputusan operasional.</p>
                        </div>
                    </div>
                    <!-- Kolom 3: Sekretaris -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-file-alt fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Sekretaris</h5>
                            <p class="text-muted">Bertanggung jawab untuk mendokumentasikan semua kegiatan organisasi, serta
                                memastikan komunikasi berjalan lancar antara anggota dan pihak luar.</p>
                        </div>
                    </div>
                    <!-- Kolom 4: Bendahara -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-wallet fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Bendahara</h5>
                            <p class="text-muted">Mengelola keuangan organisasi, termasuk pencatatan, perencanaan anggaran,
                                dan pelaporan keuangan.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <!-- Kolom 5: Seksi Sumber Daya Manusia -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-users-cog fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Seksi Sumber Daya Manusia</h5>
                            <p class="text-muted">Bertanggung jawab atas rekrutmen, pelatihan, dan pengembangan anggota
                                organisasi untuk memastikan kapasitas sumber daya manusia yang optimal.</p>
                        </div>
                    </div>
                    <!-- Kolom 6: Seksi Humas -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-bullhorn fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Seksi Humas</h5>
                            <p class="text-muted">Membangun hubungan baik dengan publik, media, dan pihak luar. Bertanggung
                                jawab atas pengelolaan citra organisasi di masyarakat.</p>
                        </div>
                    </div>
                    <!-- Kolom 7: Seksi Acara -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-calendar-check fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Seksi Acara</h5>
                            <p class="text-muted">Menyelenggarakan dan mengelola acara serta kegiatan organisasi, mulai dari
                                perencanaan hingga pelaksanaan.</p>
                        </div>
                    </div>
                    <!-- Kolom 8: Seksi Teknik dan Infrastruktur -->
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card text-center p-4 shadow-lg" style="height: 100%;">
                            <div class="icon mb-3">
                                <i class="fas fa-cogs fa-3x text-primary"></i>
                            </div>
                            <h5 class="font-weight-bold text-primary">Seksi Teknik dan Infrastruktur</h5>
                            <p class="text-muted">Mengelola semua hal yang berkaitan dengan teknis dan infrastruktur
                                organisasi, termasuk perangkat keras dan perangkat lunak yang digunakan.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
