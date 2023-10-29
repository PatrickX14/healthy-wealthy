@extends('layouts.index')
@section('content')
    <div class="container mt-5">
        <div class="card border-dark mb-3 text-center bg-grey">
            <h1 class="card-header text-start bg-primary text-light">อาหาร</h1>
            <div class="card-body">
                <img src="{{ asset('storage/image/' . $food->picture) }}" alt="">
                <h2 class="card-title mt-4">{{ $food->foodname }}</h2>
                <div class="row align-items-start mt-4">
                    <div class="col">
                        <h4>วิธีการทำ</h4>
                        <textarea name="" id="" cols="30" rows="10" readonly>{{ $food->foodrecipe }}</textarea>
                    </div>
                    <div class="col">
                        <h4>วัตถุดิบ</h4>
                        <textarea name="" id="" cols="30" rows="10" readonly>{{ $food->foodingr }}</textarea>
                    </div>
                </div>
                <h4 class="mt-5">วิธีการทำ</h4>
                <iframe width="560" height="315" src="{{ $food->video }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
