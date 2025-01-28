@extends('layouts.app')

@section('title', 'Profil Pimpinan')

@section('content')
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Profil Pimpinan</h1>
                        <p>Temui para pemimpin yang membentuk visi dan masa depan PDM Kuansing</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <section class="team-content py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 col-md-12 text-center">
                    <h2 class="mb-4 font-weight-bold" data-aos="zoom-in" data-aos-duration="1000">Tim Pimpinan PDM Kuansing</h2>
                    <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #3498db; margin: 0 auto;"
                        data-aos="zoom-in"></div>
                    <p class="lead" data-aos="fade-up" data-aos-duration="1200">
                        Kenali pemimpin kami yang berdedikasi dan mendorong inovasi serta keunggulan di Organisasi PDM Kuansing.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/1.jpg') }}" alt="John Doe" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">John Doe</h5>
                            <p class="text-muted">KETUA</p>
                            <p class="card-text">John Doe memimpin tim kami dengan visi dan semangat untuk keunggulan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/2.jpeg') }}" alt="Jane Smith" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Jane Smith</h5>
                            <p class="text-muted">WAKIL KETUA 1</p>
                            <p class="card-text">Jane Smith mendorong inovasi dan adopsi teknologi di organisasi kami.</p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="Richard Roe"
                                class="card-img-top img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Richard Roe</h5>
                            <p class="text-muted">WAKIL KETUA 2</p>
                            <p class="card-text">Richard Roe memastikan bahwa semua operasional berjalan dengan lancar dan efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/1.jpg') }}" alt="John Doe" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">John Doe</h5>
                            <p class="text-muted">KETUA</p>
                            <p class="card-text">John Doe memimpin tim kami dengan visi dan semangat untuk keunggulan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/2.jpeg') }}" alt="Jane Smith" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Jane Smith</h5>
                            <p class="text-muted">WAKIL KETUA 1</p>
                            <p class="card-text">Jane Smith mendorong inovasi dan adopsi teknologi di organisasi kami.</p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="Richard Roe"
                                class="card-img-top img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Richard Roe</h5>
                            <p class="text-muted">WAKIL KETUA 2</p>
                            <p class="card-text">Richard Roe memastikan bahwa semua operasional berjalan dengan lancar dan efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/1.jpg') }}" alt="John Doe" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">John Doe</h5>
                            <p class="text-muted">KETUA</p>
                            <p class="card-text">John Doe memimpin tim kami dengan visi dan semangat untuk keunggulan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/2.jpeg') }}" alt="Jane Smith" class="card-img-top img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Jane Smith</h5>
                            <p class="text-muted">WAKIL KETUA 1</p>
                            <p class="card-text">Jane Smith mendorong inovasi dan adopsi teknologi di organisasi kami.</p>
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{ asset('images/pimpinan/3.jpeg') }}" alt="Richard Roe"
                                class="card-img-top img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Richard Roe</h5>
                            <p class="text-muted">WAKIL KETUA 2</p>
                            <p class="card-text">Richard Roe memastikan bahwa semua operasional berjalan dengan lancar dan efisien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
