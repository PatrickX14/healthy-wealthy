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
                    {{ __("You're logged in!") }}
                    <ul>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">ชื่ออาหาร</th>
                                    <th scope="col">ปริมาณแคลลอรี่</th>
                                    <th scope="col">โรค</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foodlist as $food)
                                <tr>
                                    <th scope="row">{{ $food->id }}</th>
                                    <td>{{ $food->foodname }}</td>
                                    <td>{{ $food->foodkcal }}</td>
                                    <td>{{ $food->diseases->name }}</td>
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
