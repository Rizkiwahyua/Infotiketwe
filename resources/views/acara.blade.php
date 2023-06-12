<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
    @include('header')
  
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>

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