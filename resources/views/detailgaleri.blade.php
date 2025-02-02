@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

    <section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Galeri Foto
                        </h2>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                @php
                    $detail = DB::table('galleries')->where('id', $id)->first();
                    // dd($detail);
                @endphp
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="owl-carousel product-slider">
                        @foreach ($detail as $item)
                            <div>
                                <a href="{{ Storage::url($item) }}" class="image-popup">
                                    <img src="{{ Storage::url($item) }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <h3>{{ $detail->title }}</h3>
                    <p>{{ $detail->desc }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Galeri Video
                        </h2>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="images/process/process-1.jpg" alt="" class="img-fluid">

                        <h3>Galeri</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
