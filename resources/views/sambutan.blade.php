{{-- @extends('layouts.app')

@section('title', 'Sambutan Pimpinan')

@section('content')

    <section class="banner-area py-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="banner-img-block">
                        <img src="{{ asset('images/pimpinan.jpg') }}" alt="banner-img" class="img-fluid">
                        <p class="text-center text-muted mt-2 fst-italic"><b>Ir H Maisir</b></p>
                        <p class="text-center text-muted mt-2 fst-italic">Ketua PDM Kuantan Singingi Periode 2022-2027</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 text-center text-lg-left">
                    <div class="main-banner">
                        <h1 class="mb-4 font-weight-normal">
                            Sambutan Pimpinan
                        </h1>
                        <h4>Selamat Datang di Website Profil PDM Kuantan Singingi</h4>
                        <p class="lead mb-4">
                            Assalamu'alaikum warahmatullahi wabarakatuh,

                            Alhamdulillah, segala puji bagi Allah SWT yang telah memberikan rahmat dan karunia-Nya kepada
                            kita semua. Shalawat serta salam semoga selalu tercurah kepada Nabi Muhammad SAW, keluarga,
                            sahabat, dan umat Islam yang setia mengikuti ajaran-Nya.

                            Dalam kesempatan ini, kami ingin menyampaikan rasa terima kasih yang mendalam kepada seluruh
                            jajaran pengurus, anggota, serta masyarakat yang senantiasa mendukung perjuangan Muhammadiyah di
                            Kabupaten Kuantan Singingi. Dukungan, kerja keras, dan dedikasi yang telah diberikan menjadi
                            pondasi kokoh bagi keberlangsungan dakwah dan amal usaha Muhammadiyah di wilayah ini.

                            Melalui momentum yang berharga ini, mari kita jadikan setiap program dan kegiatan sebagai upaya
                            nyata dalam membangun peradaban yang berlandaskan nilai-nilai Islam. Dengan semangat yang
                            tinggi, kita bersama-sama harus mampu menghadirkan solusi bagi berbagai tantangan sosial,
                            pendidikan, dan ekonomi di tengah masyarakat, sehingga Muhammadiyah benar-benar dirasakan
                            manfaatnya oleh semua kalangan.

                            Bersama-sama, kita berkomitmen untuk mewujudkan masyarakat yang berkemajuan serta siap untuk
                            menghadapi tantangan zaman dengan semangat yang penuh ikhlas dan amanah. Mari kita lanjutkan
                            perjuangan dakwah dan amal usaha Muhammadiyah di Kuansing dengan penuh kesungguhan, kebersamaan,
                            dan keikhlasan. Semoga Allah SWT senantiasa memberikan petunjuk, kekuatan, serta keberkahan
                            dalam setiap langkah yang kita ambil untuk kemajuan umat dan bangsa.Aamiin.
                            Wassalamu’alaikum warahmatullahi wabarakatuh.</p>
                        <p class="mb-0" style="text-align: right;">
                            <a href="{{ url('/') }}" target="_blank" class="btn btn-primary btn-circled">
                                Back
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 --}}
 @extends('layouts.app')

 @section('title', 'Sambutan Pimpinan')
 
 @section('content')
     <style>
         .float-image {
             float: right;
             /* Posisi gambar di kanan */
             margin-left: 20px;
             /* Jarak antara gambar dan teks di sebelah kiri */
             margin-bottom: 10px;
             /* Jarak bawah gambar */
             max-width: 40%;
             /* Ukuran gambar maksimal */
             height: auto;
             /* Tinggi gambar menyesuaikan */
         }
 
         .content-with-image {
             overflow: hidden;
             /* Untuk menghindari konten tumpang tindih */
         }
 
         .lead {
             margin-bottom: 5px;
             /* Jarak antar paragraf lebih kecil */
             text-align: justify;
             /* Rata kiri-kanan untuk tampilan rapi */
             line-height: 1.5;
             /* Jarak antar baris dalam paragraf */
         }
 
         .btn-circled {
             border-radius: 50px;
             /* Membuat tombol lebih melengkung */
         }
     </style>
 
     <section class="banner-area py-7">
         <div class="container">
             <div class="main-banner">
                 <h1 class="mb-4 font-weight-normal">Sambutan Pimpinan</h1>
                 <h4>Selamat Datang di Website Profil PDM Kuantan Singingi</h4>
 
                 <div class="content-with-image">
                     <img src="{{ asset('images/pimpinan.jpg') }}qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq" alt="Sambutan Pimpinan" class="float-image">
                     <p class="lead">
                         Assalamu'alaikum warahmatullahi wabarakatuh,
                         <br><br>
                         Alhamdulillah, segala puji bagi Allah SWT yang telah memberikan rahmat dan karunia-Nya kepada kita
                         semua. Website ini hadir untuk memberikan informasi mengenai Pimpinan Daerah Muhammadiyah Kuantan
                         Singingi, termasuk kegiatan, program, dan inovasi yang terus kami jalankan. Alhamdulillah, segala
                         puji bagi Allah SWT yang telah memberikan rahmat dan karunia-Nya kepada kita
                         semua. Website ini hadir untuk memberikan informasi mengenai Pimpinan Daerah Muhammadiyah Kuantan
                         Singingi, termasuk kegiatan, program, dan inovasi yang terus kami jalankan.
                     </p>
                     <p class="lead">
                         Kami berkomitmen untuk memberikan pelayanan yang terbaik bagi umat, termasuk mendorong generasi muda
                         untuk berkontribusi aktif dalam membangun masyarakat yang berkemajuan. Dengan dukungan seluruh
                         pihak, kami yakin tujuan ini dapat tercapai. Alhamdulillah, segala puji bagi Allah SWT yang telah
                         memberikan rahmat dan karunia-Nya kepada kita
                         semua. Website ini hadir untuk memberikan informasi mengenai Pimpinan Daerah Muhammadiyah Kuantan
                         Singingi, termasuk kegiatan, program, dan inovasi yang terus kami jalankan.
                     </p>
                     <p class="lead">
                         Melalui semangat kebersamaan dan gotong royong, mari kita perkuat dakwah dan amal usaha Muhammadiyah
                         di wilayah ini. Semoga Allah SWT senantiasa memberikan kekuatan dan petunjuk-Nya kepada kita semua.
                         Wassalamu'alaikum warahmatullahi wabarakatuh. Alhamdulillah, segala puji bagi Allah SWT yang telah
                         memberikan rahmat dan karunia-Nya kepada kita
                         semua. Website ini hadir untuk memberikan informasi mengenai Pimpinan Daerah Muhammadiyah Kuantan
                         Singingi, termasuk kegiatan, program, dan inovasi yang terus kami jalankan.
                     </p>
                 </div>
 
                 <p class="text-right">
                     <a href="{{ url('/') }}" class="btn btn-primary btn-circled"
                         style="font-size: 14px; padding: 10px 20px; border-radius: 20px;">
                         Kembali
                     </a>
                 </p>
             </div>
         </div>
     </section>
 
 @endsection