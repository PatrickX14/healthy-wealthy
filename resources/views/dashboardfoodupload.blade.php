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

                    <form method="POST" action="/foodupload" enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-start g-3 fs-4">
                            <div class="col-sm-12">
                                <label class="h-100 w-100" for="">ชื่ออาหาร</label>
                                <input class="h-100 w-100 form-control" type="text" name="foodname">
                                @error('foodname')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label class="h-100 w-100" for="">ปริมาณแคลอรี่</label>
                                <input class="h-100 w-100 form-control" type="number" name="foodkcal">
                                @error('foodkcal')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label class="h-100 w-100" for="">หมวดหมู่</label>
                                <select class="form-select" aria-label="Default select example" name="foodcategory">
                                    <option selected disabled>เลือกหมวดหมู่อาหาร</option>
                                    <option value="edible">กินได้</option>
                                    <option value="inedible">กินไม่ได้</option>
                                </select>
                                @error('foodcategory')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label class="h-100 w-100" for="">โรค</label>
                                <select class="form-select" aria-label="Default select example" name="diseases_id">
                                    @foreach ($diseases as $diseases)
                                        <option value="{{ $diseases->id }}">{{ $diseases->name }}</option>
                                    @endforeach
                                </select>
                                @error('foodcategory')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">รูปภาพอาหาร</label>
                                <input class="form-control" type="file" name="picture">
                                @error('picture')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="h-100 w-100" for="">แหล่งอ้างอิง</label>
                                <input class="h-100 w-100 form-control" type="text" name="refer">
                                @error('refer')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="h-100 w-100" for="">Embed จาก Youtube</label>
                                <input class="h-100 w-100 form-control" type="text" name="video">
                                @error('video')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="h-100 w-100" for="">ขั้นตอนการปรุงอาหาร</label>
                                <textarea class="w-100 form-control" style="height: 200px; overflow:visible;" type="number" name="foodrecipe"></textarea>
                                {{-- <input class="h-100 w-100 form-control" type="text" name="foodrecipe"> --}}
                                @error('foodrecipe')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="h-100 w-100" for="">วัตถุดิบ</label>
                                <textarea class="w-100 form-control" style="height: 200px; overflow:visible;" type="number" name="foodingr"></textarea>
                                {{-- <input class="h-100 w-100 form-control" type="text" name="foodingr"> --}}
                                @error('foodingr')
                                    <span class="text-danger fs-6">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr class="my-4">
                            <div class="col-12 mt-0">
                                <button type="submit"
                                    class="btn form-control bg-success text-light col-12 justify-center w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
