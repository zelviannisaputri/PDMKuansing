@extends('admin.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <hr>
            <div class="container-fluid">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Kontak Kami</h3>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-bold">
                                <i class="fa fa-table text-primary" aria-hidden="true"></i> {{ $judul }}
                            </h5>
                        </div>

                        <div class="card-body">
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif

                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-primary btn-sm active" data-toggle="modal"
                                    data-target="#popUpEditTambah">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Baru
                                </button>
                            </div>

                            <table id="dataKontak" class="table mt-12 table-bordered table-striped table-hover text-center"
                                style="width: 100%; margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm"
                                                    onclick="editKontak('{{ $contact->id }}', '{{ $contact->name }}', '{{ $contact->email }}', '{{ $contact->phone }}', '{{ $contact->message }}')"
                                                    data-toggle="modal" data-target="#popUpEditTambah">Edit</button>
                                                <a class="btn btn-danger btn-sm" title="{{ $contact->id }}"
                                                    onclick="if (confirm('Anda yakin hapus data ini?')) { window.location.href = '{{ URL::to('/contacts', $contact->id) }}'; }">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                    <h5 class="modal-title" id="modalLabel">Tambah/Edit Kontak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('simpankontak') }}" method="POST" id="formKontak">
                    @csrf
                    <input type="hidden" name="_method" value="PUT"> <!-- Untuk update -->
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" required></textarea>
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
            $('#dataKontak').DataTable();

            $('#formKontak').on('submit', function(e) {
                e.preventDefault();
                $('#popUpEditTambah').modal('hide');
                toastr.success('Data berhasil disimpan!');
            });
        });

        function editKontak(id, name, email, phone, message) {
            $('#name').val(name);
            $('#email').val(email);
            $('#phone').val(phone);
            $('#message').val(message);
            $('#popUpEditTambah').modal('show');
            $('#formKontak').attr('action', '/contacts/' + id); // Update action untuk edit
        }
    </script>

    <head>
        <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/your/css/fontawesome.min.css">
        <link rel="stylesheet" href="path/to/your/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="path/to/your/css/toastr.min.css">
    </head>

    <body>
        <script src="path/to/your/js/jquery.min.js"></script>
        <script src="path/to/your/js/bootstrap.bundle.min.js"></script>
        <script src="path/to/your/js/jquery.dataTables.min.js"></script>
        <script src="path/to/your/js/dataTables.bootstrap4.min.js"></script>
        <script src="path/to/your/js/toastr.min.js"></script>
    </body>
@endsection
