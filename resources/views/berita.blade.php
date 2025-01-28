@extends('layouts.app')

@section('title', 'Berita')

@section('content')
    <!-- HERO
                            ============================================s====== -->
    <section class="page-banner-area page-about">
        {{-- <div class="overlay"></div> --}}
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Berita</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <section class="section" id="section-testimonial">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-8 text-left">
                    <div class="section-heading">
                        <h2 class="section-title">Berita Terkini</h2>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="section-heading">
                        <h2 class="section-title">Berita Kegiatan</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-start"> <!-- Ganti align-items-left menjadi align-items-start -->
                <div class="col-lg-8 mb-5"> <!-- Kolom proyek diperbesar -->
                    <div class="single-project">
                        <img src="images/projects/p-1.jpg" alt="" class="img-fluid"
                            style="width: 100%; height: auto;">
                        <div class="project-content">
                            <h4>Project: Onepage</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur
                                veniam quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"> <!-- Kolom testimonial diperkecil -->
                    <div class="separator" style="border-left: 2px solid #ccc; height: auto; margin: 0 20px;"></div>
                    <!-- Baris pemisah -->
                    <div class="row">
                        <!-- Testimonial 1 -->
                        <div class="col-12 mb-4">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid"
                                        style="width: 60px; height: 60px; border-radius: 0;">
                                    <div class="test-author-info">
                                        <h6>Will Barrow</h6>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>
                                <div class="date mb-2">OCTOBER 29, 2024</div>
                                <h6 class="project-title">Kolaborasi Penuluh Manfaat</h6>
                                <p>Quas ut distinctio tenetur animi nihil rem, amet dolorum totam.</p>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="col-12 mb-4">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid"
                                        style="width: 60px; height: 60px; border-radius: 0;">
                                    <div class="test-author-info">
                                        <h6>Jane Doe</h6>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>
                                <div class="date mb-2">OCTOBER 29, 2024</div>
                                <h6 class="project-title">Latihan Bersama Pimpinan Daerah</h6>
                                <p>Quas ut distinctio tenetur animi nihil rem, amet dolorum totam.</p>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="col-12 mb-4">
                            <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-3.jpg" alt="Testimonial author" class="img-fluid"
                                        style="width: 60px; height: 60px; border-radius: 0;">
                                    <div class="test-author-info">
                                        <h6>Alex Smith</h6>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>
                                <h6 class="project-title">SMA Muhammadiyah Tandatangan 2 Kerjasama Internasional</h6>
                                <p>Quas ut distinctio tenetur animi nihil rem, amet dolorum totam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Panduan
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Our duty towards you is to share our experience we're reaching in our work path with you.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2024</h6>
                                <a href="#!">
                                    <h3 class="card-title">Top tips to speed up your site in a speedy time</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                    suffered altratio. the lorem.</p>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2024</h6>
                                <a href="#!">
                                    <h3 class="card-title">Brand your site value with marketing strategies</h3>
                                </a>

                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                    suffered altratio. the lorem.</p>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2024</h6>
                                <a href="#!">
                                    <h3 class="card-title">Website Optimization is very essential for site speed</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama
                                    suffered altratio. the lorem.</p>
                                <a href="#!" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
