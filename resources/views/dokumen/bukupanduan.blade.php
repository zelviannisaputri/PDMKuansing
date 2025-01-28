@extends('layouts.app')

@section('title', 'Buku Panduan')

@section('content')

    <style>
        .buku-panduan .img-fluid {
            height: 200px;
            object-fit: cover;
            width: 100%;
            margin-bottom: 30px;
        }
    </style>
    <section class="page-banner-area page-service" style="margin-bottom: 10px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold"> E-Dokumen - Buku Panduan</h1>
                        <p>Beberapa buku panduan yang perlu diketahui.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Buku Panduan 1 -->
                <div class="col-md-12 buku-panduan">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/buku1.jpg" alt="Buku Panduan Organisasi Muhammadiyah" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Buku Panduan 1: Organisasi Muhammadiyah</h5>
                            <p>
                                Buku ini menjelaskan struktur organisasi Muhammadiyah, visi, misi, serta nilai-nilai dasar
                                yang
                                dianut.
                                Anggota dapat memahami lebih dalam mengenai tujuan dan perjalanan organisasi ini, serta
                                bagaimana
                                kontribusi mereka dapat membantu mewujudkan visi Muhammadiyah.
                            </p>
                            <a href="files/Gerakan_Muhammadiyah.pdf" class="btn btn-primary" download>Unduh Buku Panduan</a>
                        </div>
                    </div>
                </div>
                <!-- Buku Panduan 3 -->
                <div class="col-md-12 buku-panduan">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/buku2.jpeg" alt="Buku Panduan Pedoman Dakwah" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Buku Panduan 3: Pedoman Dakwah Muhammadiyah</h5>
                            <p>
                                Buku ini memberikan panduan tentang bagaimana melaksanakan kegiatan dakwah yang sesuai
                                dengan
                                prinsip-prinsip
                                Islam menurut Muhammadiyah. Ini mencakup cara berinteraksi dengan masyarakat, memanfaatkan
                                teknologi, serta
                                menjaga akhlak dalam berdakwah.
                            </p>
                            <a href="files/Gerakan_Muhammadiyah.pdf" class="btn btn-primary" download>Unduh Buku Panduan</a>
                        </div>
                    </div>
                </div>

                <!-- Buku Panduan 4 -->
                <div class="col-md-12 buku-panduan">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/buku3.jpg" alt="Buku Panduan Akhlak Muhammadiyah" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Buku Panduan 4: Akhlak Muhammadiyah</h5>
                            <p>
                                Buku ini menguraikan tentang akhlak dan etika yang menjadi pedoman dalam berinteraksi sesama
                                anggota
                                Muhammadiyah maupun masyarakat luas. Buku ini bertujuan untuk memberikan arahan mengenai
                                sikap,
                                perilaku,
                                dan tanggung jawab sosial anggota Muhammadiyah.
                            </p>
                            <a href="files/Gerakan_Muhammadiyah.pdf" class="btn btn-primary" download>Unduh Buku Panduan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection