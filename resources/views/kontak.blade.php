@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<!-- HERO
================================================== -->
<section class="page-banner-area page-contact">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">Kontak dan Informasi Kami</h1>
                    <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


  <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Alamat</h4>
                        <p class="lead">Jl. Ahmad Yani, Kuantan Singingi, Riau</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Email</h4>
                        <p class="lead">pdmkuansing@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Nomor Telepon</h4>
                        <p class="lead">+62-82156471103</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <!-- Bagian Heading -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-10 text-center">
                    <h5>Tinggalkan Pesan</h5>
                    <h2 class="section-title mb-2">
                        Ceritakan Pada Kami Tentang <span class="font-weight-normal">Dirimu</span>
                    </h2>
                    <p class="mb-5">
                        Whether you have questions or you would just like to say hello, contact us.
                    </p>
                </div>
            </div>
            <!-- Akhir Bagian Heading -->
    
            <div class="row">
                <!-- Bagian Form -->
                <div class="col-lg-6">
                    <form class="contact_form" action="mail.php">
                        <div class="row">
                            <!-- Input Nama -->
                            <div class="col-sm-6 mb-4">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">Your name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="name" id="name" required="" placeholder="John" type="text">
                                </div>
                            </div>
                            <!-- Input Email -->
                            <div class="col-sm-6 mb-4">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">Your email address <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email" id="email" required="" placeholder="john@gmail.com" type="email">
                                </div>
                            </div>
                            <!-- Input Nomor Telepon -->
                            <div class="col-sm-12 mb-4">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">Your Phone Number <span class="text-danger">*</span></label>
                                    <input class="form-control" id="phone" name="phone" required="" placeholder="+62812345678" type="text">
                                </div>
                            </div>
                            <!-- Input Pesan -->
                            <div class="col-sm-12 mb-4">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">How can we help you? <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Hi there, I would like to ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Kirim -->
                        <div>
                            <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Message">
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
                </div>
                <!-- Akhir Bagian Form -->
    
                <!-- Bagian Peta -->
                <div class="col-lg-6">
                    <section id="map-section" class="py-5">
                        <h5 class="text-center mb-4">Lokasi Kami</h5>
                        <div id="leaflet-map" style="height: 400px; border: 1px solid #ddd;"></div>
                    </section>
                </div>
                <!-- Akhir Bagian Peta -->
            </div>
        </div>

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('leaflet-map').setView([-0.504306, 101.438892], 15); // Koordinat Jl. Achmad Yani
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);
        L.marker([-0.504306, 101.438892]).addTo(map).bindPopup('Jl. Achmad Yani, Ps. Taluk, Kuantan Tengah, Riau 29566').openPopup();
    </script>
@endsection