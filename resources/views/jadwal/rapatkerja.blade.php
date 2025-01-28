@extends('layouts.app')

@section('title', 'Rapat Kerja Pimpinan')

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
                        <p>Rapat Kerja Pimpinan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-area py-7">
        <div class="container">
            <div class="main-banner">
                <h2>Rapat Kerja</h2>
                <div class="content-with-image">
                    <img src="{{ asset('images/rapatkerja.jpg') }}" alt="Sambutan Pimpinan" class="float-image">
                    <p class="lead">
                    <p>Tanggal: 03 Februari 2025</p>
                    <p>Waktu: 14.00 WIB</p>
                    <p>Lokasi: Gedung Dakwah Muhammadiyah</p>
                    <p>Kontak Penanggung Jawab: <b>+62821 5467 3398</b> (Bpk. Adam)</p>
                    </p>
                    <p class="lead">
                        Rapat Kerja Pimpinan bertujuan untuk menyusun program strategis dan memperkuat koordinasi antar
                        pimpinan daerah Muhammadiyah.
                        Dalam rapat ini, berbagai langkah serta program kerja akan dibahas untuk memastikan organisasi tetap
                        relevan dan responsif terhadap tantangan zaman.
                        Acara ini juga bertujuan untuk memperkuat sinergi, menyampaikan aspirasi, dan mengevaluasi
                        perkembangan organisasi. Melalui rapat ini, setiap pimpinan memiliki kesempatan untuk menyampaikan
                        aspirasi, berbagi ide, serta membahas isu-isu yang relevan dengan perkembangan organisasi dan
                        masyarakat.
                        Proses pengambilan keputusan dalam Rakerpim biasanya melibatkan diskusi mendalam, penyampaian
                        laporan kinerja, analisis situasi, dan penyusunan rekomendasi yang akan menjadi panduan dalam
                        menjalankan program kerja di masa mendatang.
                    </p>
                    <p class="lead">
                        Dengan adanya Rakerpim, diharapkan organisasi dapat menjalankan perannya secara lebih efektif,
                        responsif, dan adaptif dalam menghadapi dinamika sosial, ekonomi, dan budaya yang terus berubah.
                        Forum ini tidak hanya berfokus pada aspek teknis, tetapi juga memperhatikan nilai-nilai etika,
                        spiritualitas, dan komitmen untuk memberikan kontribusi terbaik kepada umat dan bangsa.
                        Rapat Kerja Pimpinan menjadi simbol tanggung jawab dan dedikasi para pemimpin dalam menjaga
                        keberlanjutan organisasi serta memastikan kebermanfaatannya bagi masyarakat luas.
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