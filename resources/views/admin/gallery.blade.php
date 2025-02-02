@extends('admin.main')
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-airplay bg-c-green"></i>
                    <div class="d-inline">
                        <h5>{{ $judul }}</h5>
                        <span>Dokumentasi gallery PDM Kuansing</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="#" onclick=" $('#formGaleri')[0].reset();" data-toggle="modal"
                                data-target="#popUpEditTambah"><i class="feather icon-file-plus c-primary"></i> Tambah</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ url(path: 'dashboard') }}">Dashboard</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        <div class="col-md-12 col-xl-12">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>Datatable</h5>
                                </div>
                                <div class="card-block">
                                    @if (\Session::has('success'))
                                        <div class="alert alert-info icons-alert alert-dismissible pesan">
                                            <p><strong>Info!</strong> {!! \Session::get('success') !!}</p>

                                        </div>
                                        {{-- <div class="alert alert-success pesan">
                                            <ul>
                                                <li>{!! \Session::get('success') !!}</li>
                                            </ul>
                                        </div> --}}
                                    @endif
                                    <script>
                                        setTimeout(function() {
                                            $(".pesan").fadeOut();
                                        }, 5000);
                                    </script>
                                    <table id="dataGaleri" class="table table-sm  table-bordered table-striped table-hover"
                                        style="width: 100%; margin-top: 20px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Tipe Galeri</th>
                                                <th>Dokumentasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                $data = DB::table('galleries')->select('galleries.*')->get();
                                                foreach ($data as $key => $value) { ?>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->desc }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>
                                                    <a href="{{ Storage::url($value->path) }}" target="_blank"
                                                        rel="noopener noreferrer">
                                                        <img src="{{ Storage::url($value->path) }}" alt="profile Pic"
                                                            height="40" width="40" class="img-thumbnail">
                                                </td>
                                                <td width="60">

                                                    <button type="button"
                                                        class="btn waves-effect waves-light hor-grd btn-sm btn-grd-warning"
                                                        onclick="editGaleri('{{ $value->id }}', '{{ $value->title }}', '{{ $value->desc }}', '{{ $value->type }}', '{{ asset('storage/' . $value->path) }}')"
                                                        data-toggle="modal" data-target="#popUpEditTambah"> Edit</button>

                                                    <a class="btn waves-effect waves-light hor-grd btn-sm btn-grd-danger"
                                                        title="{{ $value->id }}"
                                                        onclick= "if (confirm('Anda yakin hapus data ini?')){
                                                                    window.location.href = '{{ URL::to('/gallery', $value->id) }}';} ">
                                                        Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah/Edit -->
    <div class="modal fade" id="popUpEditTambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="modalLabel"><i class="fa fa-pencil-square"></i>
                        Tambah/Edit Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('simpangaleri') }}" method="POST" id="formGaleri"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="ids" id="ids" value="PUT"> <!-- Untuk update -->
                        <div class="form-group">
                            <label for="judul">Judul Galeri</label>
                            <input type="text" class="form-control" id="title" name="title" value=""
                                placeholder="Ketik judul galeri.." required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Ketik deskripsi galeri.." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tipe_galeri">Tipe Galeri</label>
                            <select class="form-control" id="tipe_galeri" name="tipe_galeri" required>
                                <option value="" disabled selected>-- Pilih --</option>
                                <option value="foto">Foto</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dokumentasi">Dokumentasi</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        // $(document).ready(function() {


        //     $('#formGaleri').on('submit', function(e) {
        //         e.preventDefault();
        //         $('#popUpEditTambah').modal('hide');
        //         toastr.success('Data berhasil disimpan!');
        //     });
        // });

        // function editGaleri(id, judul, deskripsi, tipe, dokumentasi) {
        //     $('#judul').val(judul);
        //     $('#deskripsi').val(deskripsi);
        //     $('#tipe_galeri').val(tipe);
        //     $('#dokumentasi').val(dokumentasi);
        //     $('#popUpEditTambah').modal('show');
        // }

        function editGaleri(id, title, desc, type, path) {


            $('#ids').val(id);
            $('#title').val(title);

            $('#deskripsi').val(desc);
            $('#tipe_galeri').val(type).trigger('change');
            $('#gambar').val(path); // Reset input file
            // $('#popUpEditTambah').modal('show');
            // $('#formGaleri').attr('action', '/gallery/' + id); // Update action untuk edit
        }

        // $.ajax({
        //     url: '/galleries',
        //     method: 'POST',
        //     data: formData,
        //     contentType: false,
        //     processData: false,
        //     success: function(response) {
        //         toastr.success(response.message);
        //     },
        //     error: function(error) {
        //         toastr.error('Terjadi kesalahan!');
        //     }
        // });

        function deleteGaleri(id) {
            $.ajax({
                url: '/gallery/' + id,
                method: 'DELETE',
                success: function(response) {
                    toastr.success('Data berhasil dihapus!');
                    location.reload(); // Reload untuk memperbarui tampilan
                },
                error: function(error) {
                    toastr.error('Terjadi kesalahan saat menghapus data!');
                }
            });
        }
    </script>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <script src="{{ asset('web/js/jquery-1.11.3.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataGaleri').DataTable();
        });
    </script>
@endsection
