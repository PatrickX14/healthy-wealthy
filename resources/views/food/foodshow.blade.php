@extends('layouts.index')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1>หมวดหมู่อาหาร</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/obesity.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคอ้วน</h4>
                        <a class="btn" href="http://127.0.0.1:8000/obesity"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/sugar-blood-level.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคเบาหวาน</h4>
                        <a class="btn" href="http://127.0.0.1:8000/diabetes"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/blood-pressure.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคความดันโลหิตสูง</h4>
                        <a class="btn" href="http://127.0.0.1:8000/hypertension"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/cholesterol.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคไขมันในเลือดสูง</h4>
                        <a class="btn" href="http://127.0.0.1:8000/hyperlipidemia"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/heart-disease.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคหัวใจขาดเลือด</h4>
                        <a class="btn" href="http://127.0.0.1:8000/heart"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/bone.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคข้อเข่าเสือม</h4>
                        <a class="btn" href="http://127.0.0.1:8000/osteoarthritis"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/mental-disorder.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคสมองเสื่อม</h4>
                        <a class="btn" href="http://127.0.0.1:8000/dementia"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/gout (1).png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคเก๊าท์</h4>
                        <a class="btn" href="http://127.0.0.1:8000/gout"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <img src="{{asset('img/kidneys (1).png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคไต</h4>
                        <a class="btn" href="http://127.0.0.1:8000/kidney"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            {{-- <i class="fa fa-vials text-primary fs-4"></i> --}}
                            <img src="{{asset('img/medical.png')}}"class="text-primary fs-4 "style="width: 42px" alt="">
                        </div>
                        <h4 class="mb-3">อาหารสำหรับโรคกระเพาะ</h4>
                        <a class="btn" href="http://127.0.0.1:8000/kidney"><i
                                class="fa fa-plus text-primary me-3"></i>ดูเมนู</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
