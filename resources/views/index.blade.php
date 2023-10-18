@extends('layouts.main')
@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" style="width: 100px;">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" style="width: 100px;">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block w-100" style="width: 100px;">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/4.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคอ้วน</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคเบาหวาน</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคความดันโลหิตสูง</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคไขมันในเลือดสูง</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคข้อเสื่อม</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคหัวใจขาดเลือด</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคสมองเสื่อม</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคซึมเศร้า</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">อาการวิตกกังวลและนอนไม่หลับ</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/6.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคเกี่ยวกับทางเดินอาหาร</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
