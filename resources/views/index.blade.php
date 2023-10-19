@extends('layouts.main')
@section('content')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('img/placeholder.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
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
