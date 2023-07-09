<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/content.css">



</head>

<body>

    @include('header')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
<div class="col-lg-9-center px-4 " style="margin-top: 100px;">
    <div class="card">
        <div class="card-header">
            Detail acara
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataEvent">Tambah
                        Data</button>
                </div>

                <!-- ModalEdit-->
                @foreach ($events as $event)
                    <div class="modal fade" id="ModalEdit{{ $event->id }}" tabindex="-1"
                        aria-labelledby="ModalEdit{{ $event->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalEdit{{ $event->id }}Label">Edit Data Acara</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('event.update', $event->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nama_acara">Nama Acara</label>
                                            <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                                                value="{{ $event->nama_acara }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Acara</label>
                                            <input type="text" class="form-control" id="tanggal" name="tanggal"
                                                value="{{ $event->tanggal }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="lokasi">Alamat</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                                value="{{ $event->lokasi }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status"
                                                value="{{ $event->status }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="no_hp">No HP</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                                value="{{ $event->no_hp }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                value="{{ $event->keterangan }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img class="card-img-top"
                                            src="{{ URL::to('asset/img/run.jpg' . $event->gambar) }}" alt=""
                                            width="100%" height="100%">
                                        <div class="card-body">
                                            <h5>{{ $event->nama_acara }}</h5>
                                            <h6>{{ $event->lokasi }}</h6>
                                            <p class="card-text">{{ $event->status }}</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalView{{ $event->id }}">View</a>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalDelete{{ $event->id }}">Delete</button>
                                                    <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalEdit{{ $event->id }}">Edit</button>
                                                </div>
                                                <small class="text-body-secondary"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ModalView-->
                    <div class="modal fade" id="ModalView{{ $event->id }}" tabindex="-1"
                        aria-labelledby="ModalView{{ $event->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalView{{ $event->id }}Label">Detail Data Acara
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Nama: {{ $event->nama_acara }}</h6>
                                    <p>Tanggal: {{ $event->tanggal }}</p>
                                    <p>Alamat: {{ $event->lokasi }}</p>
                                    <p>Status: {{ $event->status }}</p>
                                    <p>No HP: {{ $event->no_hp }}</p>
                                    <p>Keterangan: {{ $event->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ModalDelete-->
                    <div class="modal fade" id="ModalDelete{{ $event->id }}" tabindex="-1"
                        aria-labelledby="ModalDelete{{ $event->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalDelete{{ $event->id }}Label">Hapus Data
                                        Acara</h5>
                                    <button type="button" classTolong beri tanda potongan kode yang ingin Anda ubah.
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus acara ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="{{ route('event.destroy', $event->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataEvent" tabindex="-1" aria-labelledby="ModalTambahDataEventLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahDataEventLabel">Tambah Data Acara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('event.store') }}" method="post">
                    @csrf
                    <div class="input-group mt-2">
                        <span class="input-group-text">Nama acara</span>
                        <input type="text" name="nama_acara" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Tanggal acara</span>
                        <input type="text" name="tanggal" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Lokasi</span>
                        <input type="text" name="lokasi" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Status</span>
                        <input type="text" name="status" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">No HP</span>
                        <input type="text" name="no_hp" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Keterangan</span>
                        <input type="text" name="keterangan" class="form-control" placeholder="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
            </div>
        </div>
    </div>
</div>
</form>

<script>
    $(document).ready(function() {
        // Mengaktifkan tindakan saat tombol "Simpan" diklik
        $("#btnSimpan").click(function() {
            // Tambahkan tindakan yang sesuai di sini
            console.log("Tombol Simpan diklik");
            // Contoh: Mengirim data ke server menggunakan AJAX
            $.ajax({
                url: "/simpan-data-event",
                method: "POST",
                data: {
                    nama: $("#inputNama").val()
                }, // Contoh mengambil nilai input dengan id "inputNama"
                success: function(response) {
                    console.log("Data berhasil disimpan");
                    // Lakukan tindakan lain setelah data berhasil disimpan
                },
                error: function() {
                    console.log("Terjadi kesalahan saat menyimpan data");
                    // Lakukan tindakan lain jika terjadi kesalahan
                }
            });
        });

        // Mengaktifkan tindakan saat tombol "Batal" diklik
        $("#btnBatal").click(function() {
            // Tambahkan tindakan yang sesuai di sini
            console.log("Tombol Batal diklik");
            // Contoh: Mengosongkan nilai input
            $("#inputNama").val("");
        });
    });
</script>
