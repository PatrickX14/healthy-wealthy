@extends('layouts.index')
@section('content')
    <div class="container mt-5">
        <form class="w-25 me-3" role="search" style="width: 300px;" method="GET" action="/search">
            <input type="search" class="form-control" placeholder="ค้นหา...." aria-label="Search" name="search">
        </form>
        <table class="table text-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ชื่ออาหาร</th>
                    <th scope="col">ปริมาณแคลลอรี่</th>
                    <th scope="col">โรค</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($food as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td>{{ $food->foodname }}</td>
                        <td>{{ $food->foodkcal }} กิโลแคลอรี่</td>
                        <td>{{ $food->diseases->name }}</td>
                        {{-- <td>{{ $food->disease->name }}</td> --}}
                        <td>
                            <a class="btn btn-primary" href="{{ url('foodshow/' . $food->id) }}">View</a>
                            {{-- @if (Route::has('login'))
                                @auth
                                    <form action="{{ url('dashboardfoodshow/' . $food->id) }}" class="btn p-0">
                                        <button type="submit" class="btn btn-success">Edit</button>
                                    </form>
                                    <form method="POST" action="{{ url('fooddelete/' . $food->id) }}" class="btn p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @endauth
                            @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
