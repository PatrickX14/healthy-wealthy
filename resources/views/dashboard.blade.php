<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <ul>
                        <h4>รายการอาหาร <span><a href="{{ url('/foodupload') }}" class="btn btn-primary">เพิ่มรายการอาหาร</a></span></h4>
                        <table class="table">
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
                                @foreach ($foodlist as $food)
                                    <tr>
                                        <th scope="row">{{ $food->id }}</th>
                                        <td>{{ $food->foodname }}</td>
                                        <td>{{ $food->foodkcal }} กิโลแคลอรี่</td>
                                        <td>{{ $food->diseases->name }}</td>
                                        {{-- <td>{{ $food->disease->name }}</td> --}}
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ url('foodshow/' . $food->id) }}">View</a>
                                            @if (Route::has('login'))
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
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
