<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataMovie">Tambah
                        Data</button>
                </div>

                <!-- ModalEdit-->
                @foreach ($movies as $movie)
                    <div class="modal fade" id="ModalEdit{{ $movie->id }}" tabindex="-1"
                        aria-labelledby="ModalEdit{{ $movie->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalEdit{{ $movie->id }}Label">Edit Data Acara</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('movie.update', $movie->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nama_acara">Nama Acara</label>
                                            <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                                                value="{{ $movie->nama_acara }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal">tanggal Acara</label>
                                            <input type="text" class="form-control" id="tanggal" name="tanggal"
                                                value="{{ $movie->tanggal }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="lokasi">Alamat</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                                value="{{ $movie->lokasi }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_ortu">Status</label>
                                            <input type="text" class="form-control" id="status" name="status"
                                                value="{{ $movie->status }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="umur">No HP</label>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                                value="{{ $movie->no_hp }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="jenis_kelamin">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                value="{{ $movie->keterangan }}">
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
                                            src="{{ URL::to('asset/img/dora.jpg' . $movie->gambar) }}" alt=""
                                            width="100%" height="100%">
                                        <div class="card-body">
                                            <h5>{{ $movie->nama_acara }}</h5>
                                            <h6>{{ $movie->lokasi }}</h6>
                                            <p class="card-text">{{ $movie->status }}</p>
                                            <div class="d-flex justify-content-center align-items-center">

                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalView{{ $movie->id }}">View</a></button>

                                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalDelete{{ $movie->id }}">Delete</button>

                                                    <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal"
                                                        data-bs-target="#ModalEdit{{ $movie->id }}">Edit</button>

                                                    </td>

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
                    <div class="modal fade" id="ModalView{{ $movie->id }}" tabindex="-1"
                        aria-labelledby="ModalView{{ $movie->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalView{{ $movie->id }}Label">Detail Data Anak
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Nama: {{ $movie->nama_acara }}</h6>
                                    <p>{{ $movie->tanggal }}</p>
                                    <p>Alamat: {{ $movie->lokasi }}</p>
                                    <p>Status: {{ $movie->status }}</p>
                                    <p>{{ $movie->no_hp }}</p>
                                    <p>Keterangan: {{ $movie->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="ModalDelete{{ $movie->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="ModalDelete{{ $movie->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalDelete{{ $movie->id }}Label">Konfirmasi Acara
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus acara ini</p>
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="{{ route('movie.destroy', $movie->id) }}">
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
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataMovie" tabindex="-1" aria-labelledby="ModalTambahDataMovieLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahDataMovieLabel">Masukkan Data Acara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body lg-4">
                <form action="{{ route('movie.store') }}" method="post">
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
                url: "/simpan-data-movie",
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
