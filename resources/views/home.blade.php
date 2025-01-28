@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        /* Carousel styles */
        .carousel {
            margin-top: 50px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .carousel-inner img {
            object-fit: cover;
            height: 400px;
        }

        .carousel-indicators {
            margin-bottom: 40px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #59636c;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        /* Custom Controls */
        .custom-controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .custom-controls button {
            border: none;
            color: black;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-controls button:hover {
            background-color: #59636c;
        }

        /* Banner section */
        .banner-area {
            margin-top: 100px;
        }
    </style>
    <section style="margin-top: 70px;">
        <div class="container">
            <div id="carouselExampleAutoplay" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplay" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/kerjasama.jpg" class="d-block w-100" alt="Foto 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/tabligh-akbar.jpeg" class="d-block w-100" alt="Foto 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/musyawarah-daerah.jpg" class="d-block w-100" alt="Foto 3">
                    </div>
                </div>
                <div class="custom-controls">
                    <button type="button" onclick="prevSlide()">← </button>
                    <button type="button" onclick="nextSlide()"> →</button>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="banner-img-block text-center">
                        <img src="images/pimpinan.jpg" alt="banner-img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 text-center text-lg-left">
                    <div class="main-banner">
                        <h1 class="mb-4 font-weight-normal">
                            Sambutan Pimpinan
                        </h1>
                        <h4>Selamat Datang di Website Profil PDM Kuantan Singingi</h4>
                        <p style="text-align: justify; text-indent: 1.27cm;">
                            Assalamu'alaikum warahmatullahi wabarakatuh,
                            Alhamdulillah, segala puji bagi Allah SWT yang telah memberikan rahmat dan karunia-Nya kepada
                            kita semua. Shalawat serta salam semoga selalu tercurah kepada Nabi Muhammad SAW, keluarga,
                            sahabat, dan umat Islam yang setia mengikuti ajaran-Nya.Dalam kesempatan ini, kami ingin
                            menyampaikan rasa terima kasih yang mendalam kepada seluruh
                            jajaran pengurus, anggota, serta masyarakat yang senantiasa mendukung perjuangan Muhammadiyah di
                            Kabupaten Kuantan Singingi. Bersama-sama, kita berkomitmen untuk mewujudkan masyarakat yang
                            berkemajuan serta siap untuk menghadapi tantangan zaman dengan semangat yang penuh ikhlas dan
                            amanah. Mari kita lanjutkan perjuangan dakwah dan amal usaha Muhammadiyah di Kuansing dengan
                            penuh
                            kesungguhan dan kebersamaan. Semoga Allah SWT senantiasa memberikan petunjuk, kekuatan, serta
                            keberkahan dalam setiap langkah yang kita ambil untuk kemajuan umat dan bangsa. Aamiin.
                        </p>
                        <p class="mb-0" style="text-align: right;">
                            <a href="{{ url('home/sambutanpimpinan') }}" target="_blank"
                                class="btn btn-primary btn-circled">
                                Baca Lebih Banyak
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-2 mb-4" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-6 text-center">
                    <h2 class="section-title">Berita</h2>
                    <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #3498db; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center text-center">
                @foreach (['seminar-sehari-tarjih.jpeg', 'tabligh-akbar.jpeg', 'kajian-bulanan.jpg'] as $index => $image)
                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="images/{{ $image }}" alt="" class="img-fluid blog-img"
                                    style="width: 400px; height: 200px; object-fit: cover; border-radius: 10px;">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content text-justify">
                                    <h6>17 October 2024</h6>
                                    <a href="#!">
                                        <h3 class="card-title">{{ $titles[$index] ?? 'Judul Berita' }}</h3>
                                    </a>
                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                        suffered altratio. the lorem.</p>
                                    <div class="text-right">
                                        <a href="/berita" class="btn btn-primary btn-circled">Baca Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
