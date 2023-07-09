<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/content.css">
</head>

<body>

    @include('header')

    <div class="col-lg-9-center px-4 " style="margin-top: 100px;">
        <div class="card">
            <div class="card-header">
                Detail acara
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataKonser">Tambah
                            Data</button>
                    </div>

                    <!-- ModalEdit -->
                    @foreach ($concerts as $concert)
                    <div class="modal fade" id="ModalEdit{{ $concert->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $concert->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalEdit{{ $concert->id }}Label">Edit Data Konser</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('concert.update', $concert->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nama_konser">Nama Konser</label>
                                            <input type="text" class="form-control" id="nama_konser" name="nama_konser" value="{{ $concert->nama_konser }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Konser</label>
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $concert->tanggal }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="lokasi">Lokasi</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $concert->lokasi }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="penyanyi">Penyanyi</label>
                                            <input type="text" class="form-control" id="penyanyi" name="penyanyi" value="{{ $concert->penyanyi }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="harga_tiket">Harga Tiket</label>
                                            <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ $concert->harga_tiket }}">
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
                                        <img class="card-img-top" src="{{ URL::to('asset/img/run.jpg' . $concert->gambar) }}" alt="" width="100%" height="100%">
                                        <div class="card-body">
                                            <h5>{{ $concert->nama_konser }}</h5>
                                            <h6>{{ $concert->lokasi }}</h6>
                                            <p class="card-text">{{ $concert->penyanyi }}</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView{{ $concert->id }}">View</button>
                                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $concert->id }}">Delete</button>
                                                    <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $concert->id }}">Edit</button>
                                                </div>
                                                <small class="text-body-secondary"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ModalView -->
                    <div class="modal fade" id="ModalView{{ $concert->id }}" tabindex="-1" aria-labelledby="ModalView{{ $concert->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalView{{ $concert->id }}Label">Detail Data Konser</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Nama: {{ $concert->nama_konser }}</h6>
                                    <p>{{ $concert->tanggal }}</p>
                                    <p>Lokasi: {{ $concert->lokasi }}</p>
                                    <p>Penyanyi: {{ $concert->penyanyi }}</p>
                                    <p>Harga Tiket: {{ $concert->harga_tiket }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ModalDelete -->
                    <div class="modal fade" id="ModalDelete{{ $concert->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalDelete{{ $concert->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalDelete{{ $concert->id }}Label">Konfirmasi Hapus Konser</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&
                                            Kode tersebut masih belum lengkap. Berikutnya, Anda perlu menambahkan bagian-bagian berikut:

                                            ```html
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
    </div>
    </div>
    </div>

    <!-- Modal tambah data -->
    <div class="modal fade" id="ModalDataKonser" tabindex="-1" aria-labelledby="ModalTambahDataKonserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahDataKonserLabel">Tambah Data Konser</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body lg-4">
                    <form action="{{ route('concert.store') }}" method="post">
                        @csrf
                        <div class="input-group mt-2">
                            <span class="input-group-text">Nama konser</span>
                            <input type="text" name="nama_konser" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Tanggal konser</span>
                            <input type="text" name="tanggal" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Lokasi</span>
                            <input type="text" name="lokasi" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Penyanyi</span>
                            <input type="text" name="penyanyi" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Harga Tiket</span>
                            <input type="text" name="harga_tiket" class="form-control" placeholder="">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-WD2/3/N9P86EJb8RR2ez/YIae0lcmP/dH9BOHJ2LvmOEM2hK9PDVDo8RQt/joYQy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Mengaktifkan tindakan saat tombol "Simpan" diklik
            $("#btnSimpan").click(function() {
                // Tambahkan tindakan yang sesuai di sini
                console.log("Tombol Simpan diklik");
                // Contoh: Mengirim data ke server menggunakan AJAX
                $.ajax({
                    url: "/simpan-data-konser",
                    method: "POST",
                    data: {
                        nama_konser: $("input[name=nama_konser]").val(),
                        tanggal: $("input[name=tanggal]").val(),
                        lokasi: $("input[name=lokasi]").val(),
                        penyanyi: $("input[name=penyanyi]").val(),
                        harga_tiket: $("input[name=harga_tiket]").val(),
                    },
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
                $("input[name=nama_konser]").val("");
                $("input[name=tanggal]").val("");
                $("input[name=lokasi]").val("");
                $("input[name=penyanyi]").val("");
                $("input[name=harga_tiket]").val("");
            });
        });
    </script>

</body>

</html>
```