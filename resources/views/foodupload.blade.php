@extends('layouts.main')
@section('content')
    <div class="container mt-5 bg-body-secondary pb-3 rounded-4">
        <form method="POST" action="/foodupload">
            @csrf
            <div class="row align-items-start g-3 fs-4">
                <div class="col-sm-12">
                    <label class="h-100 w-100" for="">ชื่ออาหาร</label>
                    <input class="h-100 w-100 form-control" type="text" required
                        oninvalid="this.setCustomValidity('โปรดระบุชื่ออาหาร')">
                </div>
                <div class="col-sm-6">
                    <label class="h-100 w-100" for="">ปริมาณแคลอรี่</label>
                    <input class="h-100 w-100 form-control" type="number" required
                        oninvalid="this.setCustomValidity('โปรดระบุปริมาณแคลอรี่')">
                </div>
                <div class="col-6">
                    <label class="h-100 w-100" for="">ปริมาณแคลอรี่</label>
                    <input class="h-100 w-100 form-control" type="number">
                </div>
                <div class="col-12">
                    <label for="formFile" class="form-label">รูปภาพอาหาร</label>
                    <input class="form-control" type="file" >
                </div>
                <div class="col-6">
                    <label class="h-100 w-100" for="">แหล่งอ้างอิง</label>
                    <input class="h-100 w-100 form-control" type="number">
                </div>
                <hr class="my-4">
                <div class="col-12 mt-0">
                    <button type="submit"
                        class="btn form-control bg-success text-light col-12 justify-center w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/foodupload.js') }}"></script>
@endsection
