@extends('layouts.app')

@section('title', 'Surat Edaran')

@section('content')
    <section class="page-banner-area page-service" style="margin-bottom: 10px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">E-Dokumen - Surat Edaran</h1>
                        <p>Kumpulan Surat Edaran PDM Kuantan Singingi yang dapat diunduh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="library" style="margin-top: 5px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-left mb-4">Library Surat Edaran PDM Kuantan Singingi</h4>
                    <div class="accordion" id="accordionSuratEdaran">
                        <!-- Tahun 2024 -->
                        <div class="card mb-2">
                            <div class="card-header" id="heading2024">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                                        Surat Edaran Tahun 2024
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2024" class="collapse" aria-labelledby="heading2024"
                                data-parent="#accordionSuratEdaran">
                                <div class="card-body">
                                    <ul>
                                        <li>SE No. 001/2024: <a href="/files/se_001_2024.pdf" download>Unduh</a></li>
                                        <li>SE No. 002/2024: <a href="/files/se_002_2024.pdf" download>Unduh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahun 2023 -->
                        <div class="card mb-2">
                            <div class="card-header" id="heading2023">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse2023" aria-expanded="true" aria-controls="collapse2023">
                                        Surat Edaran Tahun 2023
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2023" class="collapse show" aria-labelledby="heading2023"
                                data-parent="#accordionSuratEdaran">
                                <div class="card-body">
                                    <ul>
                                        <li>SE No. 001/2023: <a href="/files/se_001_2023.pdf" download>Unduh</a></li>
                                        <li>SE No. 002/2023: <a href="/files/se_002_2023.pdf" download>Unduh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahun 2022 -->
                        <div class="card mb-2">
                            <div class="card-header" id="heading2022">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                                        Surat Edaran Tahun 2022
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2022" class="collapse" aria-labelledby="heading2022"
                                data-parent="#accordionSuratEdaran">
                                <div class="card-body">
                                    <ul>
                                        <li>SE No. 001/2022: <a href="/files/se_001_2022.pdf" download>Unduh</a></li>
                                        <li>SE No. 002/2022: <a href="/files/se_002_2022.pdf" download>Unduh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection