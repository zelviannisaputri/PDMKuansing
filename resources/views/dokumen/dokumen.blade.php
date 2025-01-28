@extends('layouts.app')

@section('title', 'E-Dokumen')

@section('content')
    <section class="page-banner-area page-service">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">E-Dokumen</h1>
                        <p>Untuk mendukung transparansi informasi dan memudahkan penyebaran dokumen penting bagi seluruh
                            anggota PDM Kuantan Singingi dan masyarakat yang membutuhkan akses terhadap informasi
                            organisasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-inner-content media-body">
                            <h4>HPT</h4>
                            <p>Buku Himpunan Putusan Tarjih Muhammadiyah, silakan klik di bawah ini</p>
                            <a href="/files/Buku_HPT_Muhammadiyah.pdf" download class="btn btn-primary">Unduh HPT</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-inner-content media-body">
                            <h4><a href="{{ url('/lagumuhammadiyah') }}">Lagu-Lagu Muhammadiyah</a></h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-inner-content media-body">
                            <h4><a href="{{ url('/suratkeputusan') }}">Surat Keputusan</a></h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-inner-content media-body">
                            <h4><a href="{{ url('/suratedaran') }}">Surat Edaran</a></h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-inner-content media-body">
                            <h4><a href="{{ url('/pengumuman') }}">Pengumuman Resmi</a></h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-inner-content media-body">
                            <h4><a href="{{ url('/bukupanduan') }}">Buku Panduan</a></h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="pl-3">Ingin tahu lebih banyak tentang ini? <a href="{{ url('/kontak') }}">Kontak Kami</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection