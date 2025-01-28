@extends('layouts.app')

@section('title', 'Musyawarah Daerah')

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
                        <p>Musyawarah Daerah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area py-7">
        <div class="container">
            <div class="main-banner">
                <h2>Musyawarah Daerah</h2>
                <div class="content-with-image">
                    <img src="{{ asset('images/musyadaerah.jpeg') }}" alt="Sambutan Pimpinan" class="float-image">
                    <p class="lead">
                    <p>Tanggal: 03 Februari 2025</p>
                    <p>Waktu: 10.00 WIB</p>
                    <p>Lokasi: Gedung Dakwah Muhammadiyah</p>
                    <p>Kontak Penanggung Jawab: <b>+62821 5467 3398</b> (Bpk. Ilham)</p>
                    </p>
                    <p class="lead">
                        Musyawarah Daerah Pimpinan Daerah Muhammadiyah (Musyda PDM) Kuantan Singingi akan dilaksanakan pada
                        Sabtu, 27 Januari 2025, mulai pukul 09.00 WIB hingga selesai. Acara ini akan bertempat di Aula
                        Kantor PDM Kuantan Singingi, dengan suasana penuh kekhidmatan dan semangat bermusyawarah untuk
                        kemajuan organisasi. Para peserta diharapkan hadir tepat waktu untuk memastikan agenda berjalan
                        sesuai rencana.

                        Acara ini akan dihadiri oleh seluruh unsur pengurus PDM, pimpinan cabang Muhammadiyah, organisasi
                        otonom Muhammadiyah, serta tokoh-tokoh masyarakat yang memiliki peran strategis dalam pengembangan
                        dakwah Muhammadiyah di Kuantan Singingi. Kehadiran mereka menjadi simbol sinergi dan kebersamaan
                        dalam menentukan arah kebijakan organisasi ke depan. Selain itu, acara ini juga akan dihadiri oleh
                        perwakilan dari Pimpinan Wilayah Muhammadiyah untuk memberikan arahan dan supervisi.
                    </p>
                    <p class="lead">
                        Tujuan utama dari Musyda ini adalah untuk mengevaluasi program kerja yang telah dilaksanakan,
                        menyusun rencana strategis untuk periode mendatang, serta memilih kepemimpinan baru yang akan
                        melanjutkan perjuangan Muhammadiyah di tingkat daerah. Dengan semangat musyawarah dan kebersamaan,
                        diharapkan hasil dari acara ini dapat membawa keberkahan serta memperkuat kontribusi Muhammadiyah
                        dalam membangun masyarakat Islam yang berkemajuan.
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