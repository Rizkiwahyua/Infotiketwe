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
        <div class="carousel-inner" style="width: 100%; height: 80vh">
            <div class="carousel-item active">
                <img src="{{ asset('asset/img/movie1.jpg') }}" class="d-block w-100 img-fluid" alt="..."
                    style="max-width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/img/event1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/img/konser1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
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



<!-- mulai main2 -->
<div class="container mt-4">
    <div class="row text-center">
        <div class="col">
            <h1>Event Terbaik</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="d-flex">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

                    <button type="button" class="btn btn-secondary">Buy</button>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

                    <button type="button" class="btn btn-secondary">Buy</button>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

                    <button type="button" class="btn btn-secondary">Buy</button>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

                    <button type="button" class="btn btn-secondary">Buy</button>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

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

<div class="container mt-4">
    <h1 class="col-12">Event terbaru </h1>
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

            <button type="button" class="btn btn-secondary">Buy</button>
        </div>
        <div class="card ms-4" style="width: 18rem;">
            <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

            <button type="button" class="btn btn-secondary">Buy</button>
        </div>
        <div class="card ms-4" style="width: 18rem;">
            <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

            <button type="button" class="btn btn-secondary">Buy</button>
        </div>
        <div class="card ms-4" style="width: 18rem;">
            <img src="{{ asset('asset/img/efe.jpg') }}" class="card-img-top" alt="...">

            <button type="button" class="btn btn-secondary">Buy</button>
        </div>

    </div>
</div>
<!-- end card -->
</div>
<!-- end main 3 -->
