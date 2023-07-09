<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Carousel Example</title>
    <style>
        .carousel-caption {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

@media (max-width: 576px) {
    .carousel-caption {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        text-align: center;
    }
}       
    </style>
</head>
<body>
    <div class="row mt-5">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::to ('asset/img/karnaval.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/filmm.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset/img/run.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>
</html>





<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/karnaval.jpg') }}" alt="" width="100%"
                        height="100%">
                    <div class="card-body">
                        <h5>karnaval</h5>
                        <p class="card-text">karnaval yang di selengarakan oleh bank indonesia bersamaaan dengan milad ke 79.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group">
                                <a href="data-event" class="btn btn-sm btn-outline-secondary">View </a>
                                
                            </div>
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/run.jpg') }}" alt="" width="100%"
                        height="100%">
                    <div class="card-body">
                        <h5>Running</h5>
                        <p class="card-text">Ini adalah even running yang di selengarakan oleh 910 dan ini akan menjadi ajang nasional.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group">
                                <a href="data-event" class="btn btn-sm btn-outline-secondary">View </a>
                                
                            </div>
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/movie.jpg') }}" alt="" width="100%"
                        height="100%">
                    <div class="card-body">
                        <h5>Film</h5>
                        <p class="card-text">lihat film terbaru disini dan dapatkan kabar terbaru dari kami anda bisa mengecek tempat dan lokasi di tayangkannya file tersebut.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group">
                                <a href="data-movie" class="btn btn-sm btn-outline-secondary">View </a>
                                
                            </div>
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/pantai.jpg') }}" alt="" width="100%"
                        height="100%">
                    <div class="card-body">
                        <h5>Pantai</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                
                            </div>
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/film.jpg') }}" alt="" width="100%"
                        height="100%";>
                    <div class="card-body">
                        <h5>Bioskop</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            
                                
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                
                            
                            <small class="text-body-secondary"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ URL::to('asset/img/pantai2.jpg') }}" alt="" width="100%"
                        height="100%">
                    <div class="card-body">
                        <h5>Sungai</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                
                            </div>
                            <small class="text-body-secondary"></small>
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

{{-- <div class="container mt-5">
    <h1 class="col-12">Event terbaik</h1>
    <div class="row">
        <div class="col-md-4 col-12 d-grid gap-2 text-center ">
            
            <div class="card-body bg-warning">
                <img src="{{ asset('asset/img/cinema.jpg') }}" class="card-img-top" alt="...">
                <p class="my-2 mb-0 card-text">MOVIE</p>
            </div>

        </div>
        <div class="col-md-4 col-12 d-grid gap-2 text-center">

            <div class="card-body bg-warning">
                <img src="{{ asset('asset/img/jordan.jpg') }}" class="card-img-top" alt="...">
                <p class="my-2 mb-0 card-text">KONSER</p>
            </div>

        </div>
        <div class="col-md-4 col-12 d-grid gap-2 text-center">

            <div class="card-body bg-warning">
                <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">
                <p class="my-2 mb-0 card-text">TRAVEL</p>
            </div>

        </div>

    </div>
</div> --}}
<!-- end main2 -->
<!-- start main 3 -->



<!-- card -->


<!-- end card -->
</div>
<!-- end main 3 -->
