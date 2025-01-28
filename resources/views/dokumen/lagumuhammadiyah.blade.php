@extends('layouts.app')

@section('title', 'E-Dokumen')

@section('content')
    <section class="page-banner-area page-service">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1>E-Dokumen</h1>
                        <h1 class="display-4 font-weight-bold">Lagu-Lagu Muhammadiyah</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3 col-md-6 text-left">
                    <h3>Lagu-Lagu Muhammadiyah</h3>
                    <p class="mb-1">Temukan koleksi lagu-lagu Muhammadiyah di sini:</p>
                    <ul class="list-unstyled mt-1">
                        <li>Lihat video Lagu 1 di YouTube: <a href="https://youtu.be/uBIrzN_38vI" target="_blank">Klik di
                                sini</a></li>
                        <li>Lihat video Lagu 2 di YouTube: <a href="https://www.youtube.com/watch?v=example2"
                                target="_blank">Klik di sini</a></li>
                        <li>Baca lirik Lagu 1 di situs resmi: <a
                                href="https://muhammadiyah-or-id.webpkgcache.com/doc/-/s/muhammadiyah.or.id/lagu-sang-surya/"
                                target="_blank">Klik di
                                sini</a></li>
                        <li>Baca lirik Lagu 2 di situs resmi: <a href="https://example.com/lirik2" target="_blank">Klik di
                                sini</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="pl-3">Ingin tahu lebih banyak tentang ini? <a href="{{ url('/contact') }}">Kontak Kami</a>
                </p>
            </div>
        </div>
        </div>
    </section>
@endsection