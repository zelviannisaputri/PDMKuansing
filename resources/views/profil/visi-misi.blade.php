@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')
<section class="page-banner-area page-about">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">Visi Misi</h1>
                    <p>Menjadi organisasi yang terdepan dalam mewujudkan masyarakat Islam yang berkemajuan.</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<section class="history-content py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 text-center">
                <h2 class="mb-4 font-weight-bold" data-aos="zoom-in" data-aos-duration="1000">Visi PDM Kuansing</h2>
                <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #3498db; margin: 0 auto;" data-aos="zoom-in"></div>
                <p class="lead mb-5" data-aos="fade-right" data-aos-duration="1200">
                    To become a trusted partner in creating innovative solutions that shape a better future.
                </p>
                <h2 class="mb-4 font-weight-bold" data-aos="zoom-in" data-aos-duration="1000">Misi PDM Kuansing</h2>
                <div class="divider mb-4" style="width: 100px; height: 3px; background-color: #e74c3c; margin: 0 auto;" data-aos="zoom-in"></div>
                <p class="lead" data-aos="fade-left" data-aos-duration="1200">
                    <ul class="list-unstyled text-left mx-auto d-inline-block">
                        <li class="mb-3" data-aos="fade-up" data-aos-duration="1000"><i class="fas fa-check-circle text-primary mr-2"></i> Deliver high-quality services tailored to client needs.</li>
                        <li class="mb-3" data-aos="fade-up" data-aos-duration="1100"><i class="fas fa-check-circle text-primary mr-2"></i> Foster an innovative culture that drives sustainable growth.</li>
                        <li class="mb-3" data-aos="fade-up" data-aos-duration="1200"><i class="fas fa-check-circle text-primary mr-2"></i> Engage in ethical practices to build long-lasting trust with stakeholders.</li>
                        <li class="mb-3" data-aos="fade-up" data-aos-duration="1300"><i class="fas fa-check-circle text-primary mr-2"></i> Empower communities through meaningful contributions and initiatives.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection