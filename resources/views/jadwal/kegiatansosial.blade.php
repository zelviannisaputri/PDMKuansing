@extends('layouts.app')

@section('title', 'Kegiatan Sosial dan Pengabdian Masyarakat')

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
                        <p>Kegiatan Sosial dan Pengabdian Masyarakat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area py-7">
        <div class="container">
            <div class="main-banner">
                <h2>Kegiatan Sosial dan Pengabdian Masyarakat</h2>
                <div class="content-with-image">
                    <img src="{{ asset('images/pengabdian.jpeg') }}" alt="Sambutan Pimpinan" class="float-image">
                    <p class="lead">
                    <p>Tanggal: 03 Februari 2025</p>
                    <p>Waktu: 10.00 WIB</p>
                    <p>Lokasi: Gedung Dakwah Muhammadiyah</p>
                    <p>Kontak Penanggung Jawab: <b>+62821 5467 3398</b> (Bpk. Ilham)</p>
                    </p>
                    <p class="lead">
                        Kegiatan Sosial dan Pengabdian Masyarakat yang diselenggarakan oleh Pimpinan Daerah Muhammadiyah
                        Kuantan Singingi akan berlangsung pada Jumat, 2 Februari 2025, mulai pukul 07.30 WIB hingga
                        selesai. Acara ini akan berlokasi di Desa Sukamaju, salah satu wilayah binaan Muhammadiyah yang
                        membutuhkan dukungan dan perhatian khusus. Para peserta diimbau hadir tepat waktu untuk bersama-sama
                        memaksimalkan manfaat kegiatan ini bagi masyarakat.

                        Kegiatan ini akan dihadiri oleh pengurus Pimpinan Daerah Muhammadiyah, pimpinan cabang, organisasi
                        otonom Muhammadiyah, dan relawan dari kalangan mahasiswa maupun masyarakat umum. Selain itu, tokoh
                        masyarakat setempat dan pemerintah desa juga akan turut berpartisipasi dalam mendukung kelancaran
                        program. Kehadiran berbagai elemen ini mencerminkan semangat kebersamaan dalam mendorong perubahan
                        positif di tengah masyarakat.
                    </p>
                    <p class="lead">
                        Tujuan utama dari kegiatan ini adalah untuk memberikan pelayanan kepada masyarakat melalui berbagai
                        program seperti pengobatan gratis, pembagian sembako, edukasi kesehatan, serta penyuluhan
                        pendidikan. Selain itu, kegiatan ini bertujuan untuk memperkuat hubungan antara Muhammadiyah dengan
                        masyarakat setempat, sekaligus menunjukkan komitmen organisasi dalam mengamalkan nilai-nilai Islam
                        secara nyata. Diharapkan, kegiatan ini dapat membawa manfaat langsung bagi masyarakat, serta
                        mempererat ukhuwah dan semangat gotong royong di wilayah Kuantan Singingi.
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