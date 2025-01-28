@extends('layouts.app')

@section('title', 'Jadwal Kegiatan')

@section('content')
    <style>
        .project-content {
            text-align: left;
            margin-left: 20px;
        }
    </style>
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Jadwal Kegiatan</h1>
                        <p>Jadwal Kegiatan ini menyediakan informasi terkini mengenai berbagai acara dan aktivitas yang akan
                            dilaksanakan oleh Pimpinan Daerah Muhammadiyah (PDM) Kuantan Singingi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-5 d-flex align-items-center position-relative">
                    <img src="images/rapatkerja.jpg" alt="Rapat Kerja Pimpinan" class="img-fluid"
                        style="width: 350px; height: 200px; object-fit: cover; border-radius: 15px;">
                    <div class="project-content ms-4" style="text-align: left; margin-left: 20px;">
                        <h3>Rapat Kerja Pimpinan</h3>
                        <p>Senin, 10 Januari 2025</p>
                        <p>Rapat Kerja Pimpinan yang dilaksanakan pada Senin, 10 Januari 2025, bertujuan untuk menyusun
                            program strategis dan memperkuat koordinasi antar pimpinan daerah Muhammadiyah.</p>
                    </div>
                    <a href="{{ url('/jadwal/rapatkerja') }}" class="btn btn-primary position-absolute"
                        style="bottom: 10px; right: 10px; padding: 8px 12px; border-radius: 8px; font-size: 12px;">
                        Read More
                    </a>
                </div>

                <div class="col-12 mb-5 d-flex align-items-center position-relative">
                    <img src="images/musyadaerah.jpeg" alt="Musyawarah Daerah" class="img-fluid"
                        style="width: 350px; height: 200px; object-fit: cover; border-radius: 15px;">
                    <div class="project-content ms-4" style="text-align: left; margin-left: 20px;">
                        <h3>Musyawarah Daerah</h3>
                        <p>Kamis, 06 Februari 2025</p>
                        <p>Musyawarah Daerah yang dilaksanakan pada Sabtu, 27 Januari 2025, bertujuan untuk mengevaluasi
                            program kerja sebelumnya, menyusun kebijakan strategis, dan memperkokoh sinergi antar pimpinan
                            Muhammadiyah di Kuantan Singingi.
                        </p>
                    </div>
                    <a href="{{ url('/jadwal/musyawarahdaerah') }}" class="btn btn-primary position-absolute"
                        style="bottom: 10px; right: 10px; padding: 8px 12px; border-radius: 8px; font-size: 12px;">
                        Read More
                    </a>
                </div>
                <div class="col-12 mb-5 d-flex align-items-center position-relative">
                    <img src="images/pelatihan.jpeg" alt="Project Marketing" class="img-fluid"
                        style="width: 350px; height: 200px; object-fit: cover; border-radius: 15px;">
                    <div class="project-content ms-4" style="text-align: left; margin-left: 20px;">
                        <h3>Pelatihan dan Pengembangan Kapasitas</h3>
                        <p>Senin, 10 Februari 2025</p>
                        <p>Pelatihan dan Pengembangan Kapasitas yang dilaksanakan pada Minggu, 28 Januari 2025, bertujuan
                            untuk meningkatkan keterampilan kepemimpinan, memperluas wawasan manajerial, dan memperkuat
                            kolaborasi antar pengurus Muhammadiyah.</p>
                    </div>
                    <a href="{{ url('/jadwal/pelatihan') }}" class="btn btn-primary position-absolute"
                        style="bottom: 10px; right: 10px; padding: 8px 12px; border-radius: 8px; font-size: 12px;">
                        Read More
                    </a>
                </div>
                <div class="col-12 mb-5 d-flex align-items-center position-relative">
                    <img src="images/pengabdian.jpeg" alt="Project Marketing" class="img-fluid"
                        style="width: 350px; height: 200px; object-fit: cover; border-radius: 15px;">
                    <div class="project-content ms-4" style="text-align: left; margin-left: 20px;">
                        <h3>Kegiatan Sosial dan Pengabdian Masyarakat</h3>
                        <p>Senin, 10 Februari 2025</p>
                        <p>Kegiatan Sosial dan Pengabdian Masyarakat yang dilaksanakan pada Jumat, 2 Februari 2025,
                            bertujuan untuk memberikan pelayanan langsung kepada masyarakat, memperkuat hubungan sosial, dan
                            mengamalkan nilai-nilai Islam melalui aksi nyata.</p>
                    </div>
                    <a href="{{ url('/jadwal/kegiatansosial') }}" class="btn btn-primary position-absolute"
                        style="bottom: 10px; right: 10px; padding: 8px 12px; border-radius: 8px; font-size: 12px;">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection