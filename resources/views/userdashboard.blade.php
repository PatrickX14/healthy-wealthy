@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">{{ $name }}</h4>
                <div class="row">
                    <div class="col6">Email: {{ $email }}</div>
                    <div class="col6">Gender: {{ $gender }}</div>
                    <div class="col6">Age: {{ $userAge }}</div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="btn btn-danger position-absolute bottom-0 end-0">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="text-white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
@endsection
