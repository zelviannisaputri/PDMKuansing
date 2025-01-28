@extends('layouts.app')

@section('title', 'Pelatihan dan Pengembangan Kapasitas')

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

    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Jadwal Kegiatan</h1>
                        <p>Pelatihan dan Pengembangan Kapasitas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area py-7">
        <div class="container">
            <div class="main-banner">
                <h2>Pelatihan dan Pengembangan Kapasitas</h2>
                <div class="content-with-image">
                    <img src="{{ asset('images/pelatihan.jpeg') }}" alt="Sambutan Pimpinan" class="float-image">
                    <p class="lead">
                    <p>Tanggal: 03 Februari 2025</p>
                    <p>Waktu: 10.00 WIB</p>
                    <p>Lokasi: Gedung Dakwah Muhammadiyah</p>
                    <p>Kontak Penanggung Jawab: <b>+62821 5467 3398</b> (Bpk. Ilham)</p>
                    </p>
                    <p class="lead">
                        Pelatihan dan Pengembangan Kapasitas bagi anggota dan pengurus Pimpinan Daerah Muhammadiyah Kuantan
                        Singingi akan diselenggarakan pada Minggu, 28 Januari 2025, mulai pukul 08.00 WIB hingga
                        pukul 16.00 WIB. Kegiatan ini akan berlangsung di Gedung Serbaguna PDM Kuantan Singingi,
                        dengan suasana yang mendukung pembelajaran dan diskusi interaktif. Peserta diharapkan datang tepat
                        waktu untuk memanfaatkan setiap sesi yang telah dirancang secara komprehensif.

                        Acara ini akan dihadiri oleh para pengurus PDM, pimpinan cabang, serta kader Muhammadiyah yang
                        berperan aktif di berbagai bidang. Selain itu, perwakilan dari organisasi otonom seperti Aisyiyah,
                        Nasyiatul Aisyiyah, dan Ikatan Pelajar Muhammadiyah juga akan turut hadir. Narasumber yang kompeten
                        di bidang manajemen organisasi, kepemimpinan, dan pengembangan kapasitas akan memandu pelatihan ini,
                        memberikan wawasan dan keterampilan baru bagi para peserta.
                    </p>
                    <p class="lead">
                        Tujuan utama dari pelatihan ini adalah untuk meningkatkan kompetensi pengurus dan kader Muhammadiyah
                        dalam mengelola organisasi secara profesional dan berkelanjutan. Kegiatan ini juga bertujuan untuk
                        memperkuat kolaborasi antar pengurus dan anggota, sehingga mampu menghadapi tantangan dakwah di era
                        modern dengan lebih efektif. Dengan adanya pelatihan ini, diharapkan lahirnya pemimpin-pemimpin yang
                        berintegritas dan mampu membawa Muhammadiyah Kuantan Singingi menjadi organisasi yang semakin
                        berkemajuan.
                    </p>
                </div>

                <p class="text-right">
                    <a href="{{ url('/jadwal') }}" class="btn btn-primary btn-circled"
                        style="font-size: 14px; padding: 10px 20px; border-radius: 20px;">
                        Kembali
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection