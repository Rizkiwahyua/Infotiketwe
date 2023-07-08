<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
    @include('header')
  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>


    <!-- Header section -->  
    <div class="album py-5 text-center">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- Menu items -->
            </div>
        </div>
    </div>

    <!-- Add Menu button -->
    <div class="card-body">
      <div class="row">
      <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahData">Tambah Data</button>
    </div>

    <!-- Modal for adding menu -->
    <div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal content for adding menu -->
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



<div class="album py-5 text-center">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/img/movie.jpg')}}" alt="" width="100%" height="100%">
  
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/img/konser.jpg')}}" alt="" width="100%" height="100%">
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/img/event.jpg')}}" alt="" width="100%" height="100%">
            
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/movie.jpg')}}" alt="" width="100%" height="100%">
            
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/movie.jpg')}}" alt="" width="100%" height="100%">
            
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/movie.jpg')}}" alt="" width="100%" height="100%">
            
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{asset('asset/movie.jpg')}}" alt="" width="100%" height="100%">
            
            <div class="card-body">
              <h5>NAMA MENU</h5>
              <h6>Harga</h6>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-warning" href="#">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <style>
    .col img{
    width: 100%;
    cursor: pointer;
    transition: 1s;
}

.col:hover img{
    transform: scale(1.1);
}


  </style>



<!-- Modal tambah data-->
<div class="modal fade" id="ModalTambahData" tabindex="-1" aria-labelledby="ModalTambahDataapaaja" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataapaaja">Masukkan Conten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
        <div class="input-group mt-1">
          <span class="input-group-text">Nama</span>
            <input type="text" name="nama" class="form-control" placeholder="">
          </div>
          <div class="input-group mt-2">
          <span class="input-group-text">Tempat,Tanggal Lahir</span>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="">
          </div>
        
          <div class="input-group mt-2">
          <span class="input-group-text">Alamat</span>
            <input type="text" name="alamat" class="form-control" placeholder="">
          </div>


          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
            <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
            </div>
          </div>
        </div>
      </div>