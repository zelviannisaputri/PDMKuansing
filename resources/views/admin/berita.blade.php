@extends('admin.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <hr>
            <div class="container-fluid">


                <div class="page-header">
                    <h3 class="fw-bold mb-3">&nbsp;</h3>

                </div>

                <div class="col-lg-12">




                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-bold  ">
                                <i class="fa fa-table text-primary" aria-hidden="true"></i> {{ $judul }}
                            </h5>
                            {{-- <div class="box-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div> --}}
                        </div>

                        <div class="card-body">
                            {{-- <div class="card-sub">
                                This is the basic table view of the ready dashboard :
                            </div> --}}


                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif


                            <div class="col-md-12 text-right">
                                {{-- <div class="text-right"> --}}
                                <button type="button" class="btn btn-primary btn-sm active" data-toggle="modal"
                                    data-target="#popUpEditTambah"><i class="fa fa-plus" aria-hidden="true"></i>
                                    Tambah Data Baru
                                </button>
                            </div>


                            <table id="dataGaleri" class="table mt-12  table-bordered table-striped table-hover text-center"
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
                                        foreach ($data as $key => $value) {
                                        ?>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->desc }}</td>
                                        <td>{{ $value->type }}</td>
                                        <td>
                                            <div class="d-flex" style="gap: 4px">
                                                @php
                                                    $paths = json_decode($value->path);
                                                @endphp
                                                @if (is_array($paths))
                                                    @foreach ($paths as $item)
                                                        <a href="{{ Storage::url($item) }}" target="_blank"
                                                            rel="noopener noreferrer">
                                                            <img src="{{ Storage::url($item) }}" alt=""
                                                                style="width: 50px; height: 50px; object-fit: cover;">
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <p>No images available</p>
                                                    <!-- Menangani kasus jika tidak ada gambar -->
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm"
                                                onclick="editGaleri('{{ $value->id }}', '{{ $value->title }}', '{{ $value->desc }}', '{{ $value->type }}', '{{ asset('storage/' . $value->path) }}')"
                                                data-toggle="modal" data-target="#popUpEditTambah">Edit</button>
                                            <a class="btn btn-danger btn-sm  " title="{{ $value->id }}"
                                                onclick= "if (confirm('Anda yakin hapus data ini?')){
                                                              window.location.href = '{{ URL::to('/gallery', $value->id) }}';} ">Delete</a>
                                        </td>
                                        <td>
                                            {{-- <button
                                                    onclick="editGaleri({{ $gallery->id }}, '{{ $gallery->title }}', '{{ $gallery->desc }}', '{{ $gallery->type }}', '{{ $gallery->path }}')">Edit</button>
                                                <button onclick="deleteGaleri({{ $gallery->id }})">Hapus</button> --}}
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

    <!-- Modal Tambah/Edit -->
    <div class="modal fade" id="popUpEditTambah" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tambah/Edit Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('simpangaleri') }}" method="POST" id="formGaleri" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT"> <!-- Untuk update -->
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
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

    <script>
        $(document).ready(function() {
            $('#dataGaleri').DataTable();

            $('#formGaleri').on('submit', function(e) {
                e.preventDefault();
                $('#popUpEditTambah').modal('hide');
                toastr.success('Data berhasil disimpan!');
            });
        });

        function editGaleri(id, judul, deskripsi, tipe, dokumentasi) {
            $('#judul').val(judul);
            $('#deskripsi').val(deskripsi);
            $('#tipe_galeri').val(tipe);
            $('#dokumentasi').val(dokumentasi);
            $('#popUpEditTambah').modal('show');
        }

        function editGaleri(id, title, desc, type, path) {
            $('#title').val(title);
            $('#deskripsi').val(desc);
            $('#tipe_galeri').val(type);
            $('#gambar').val(''); // Reset input file
            $('#popUpEditTambah').modal('show');
            $('#formGaleri').attr('action', '/gallery/' + id); // Update action untuk edit
        }

        $.ajax({
            url: '/galleries',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success(response.message);
            },
            error: function(error) {
                toastr.error('Terjadi kesalahan!');
            }
        });

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

    <head>
        <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/your/css/fontawesome.min.css">
        <link rel="stylesheet" href="path/to/your/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="path/to/your/css/toastr.min.css">
    </head>

    <body>
        <!-- Your gallery code goes here -->

        <script src="path/to/your/js/jquery.min.js"></script>
        <script src="path/to/your/js/bootstrap.bundle.min.js"></script>
        <script src="path/to/your/js/jquery.dataTables.min.js"></script>
        <script src="path/to/your/js/dataTables.bootstrap4.min.js"></script>
        <script src="path/to/your/js/toastr.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataGaleri').DataTable();
            });
        </script>
    </body>
@endsection
