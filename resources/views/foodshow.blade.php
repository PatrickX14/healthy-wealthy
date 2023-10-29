@extends('layouts.index')
@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3 text-center bg-grey">
            <h1 class="card-header text-start bg-primary text-light">อาหาร</h1>
            <div class="card-body">
                <img src="{{ asset('storage/image/' . $food->picture) }}" alt="">
                <h2 class="card-title mt-4">{{ $food->foodname }}</h2>
                <h4 class="card-title">ปริมาณแคลอรี่: {{ $food->foodkcal }} <i class="fa-solid fa-fire-flame-curved"></i></h4>

                <div class="row mt-5 ms-5 me-5">
                    <h4>วัตถุดิบ</h4>
                    <textarea name="" id="" cols="30" rows="9" readonly class="border-0"
                        style="box-sizing: border-box;">{{ $food->foodingr }}</textarea>
                </div>
                <div class="row mt-2 ms-5 me-5">
                    <h4>วิธีการทำ</h4>
                    <textarea name="" id="" cols="30" rows="9" readonly class="border-0"
                        style="box-sizing: border-box;">{{ $food->foodrecipe }}</textarea>
                </div>

                <h4 class="mt-5">วีดีโอตัวอย่างการทำอาหาร</h4>
                <iframe width="560" height="315" src="{{ $food->video }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                    <p>
                        <strong>แหล่งอ้างอิง: {{ $food->refer }}</strong>
                    </p>
            </div>
        </div>
    </div>
@endsection
