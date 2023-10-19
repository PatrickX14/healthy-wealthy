@extends('layouts.main')
@section('content')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('img/1.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">การดูแลผู้สูงอายุในเรื่องอาหารการกิน</h1>
                <p class="lead"> เพื่อให้ท่านมีสุขภาพกายและสุขภาพใจที่ดี มีความสุข มีคุณภาพชีวิตที่ดีตามวัย เพื่ออยู่กับลูกหลานให้นานที่สุด</p>
                
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/โรค/โรคอ้วน.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคเบาหวาน.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคความดันโลหิตสูง.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคไขมันในเลือดสูง.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคข้อเข่าเสือม.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคข้อเข่าเสือม</h3>
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
                    <img src="{{ asset('img/โรค/โรคหัวใจขาดเลือด.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคสมองเสื่อม.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
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
                    <img src="{{ asset('img/โรค/โรคเก๊าท์.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคเก๊าท์</h3>
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
                    <img src="{{ asset('img/โรค/โรคไต.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคไต</h3>
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
                    <img src="{{ asset('img/โรค/โรคกระเพาะ.jpg') }}" class="card-img-top" style="height: 260px; weidht: 420px;">
                    <div class="card-body">
                        <h3 class="card-text">โรคกระเพาะ</h3>
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
