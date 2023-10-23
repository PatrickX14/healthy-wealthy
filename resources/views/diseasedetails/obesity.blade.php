@extends('layouts.main')
@section('content')
    <div class="text-center mt-5">
        <img src="{{ asset('img/1.jpg') }}" class="rounded" alt="...">
    </div>
    <div class="container mt-3">
        <h1>โรคอ้วน</h1>
        <p style="text-indent: 50px;">ภาวะที่ร่างกายมีการสะสมไขมันมากเกินกว่าปกติหรือมากเกินกว่าที่ร่างกายจะเผาผลาญ
            จึงสะสมพลังงานที่เหลือเอาไว้ในรูปของไขมันตามอวัยวะต่างๆ ซึ่งมีความเสี่ยงต่อการเกิดปัญหาสุขภาพ
            และเป็นสาเหตุของการเกิดโรคเรื้อรังต่างๆ ตามมาปริมาณพลังงานอ้างอิงที่ครวได้รับประทานประจำวัน</p>
        <h4>สาเหตุของโรคอ้วน</h4>
        <p style="text-indent: 50px;">สาเหตุที่ทำให้เกิดโรคอ้วน แบ่งออกเป็น ปัจจัยภายใน และปัจจัยภายนอก
            ซึ่งส่วนใหญ่แล้วผู้ที่เป็นโรคอ้วน มักมีสาเหตุจากปัจจัยภายนอก เพราะมีพฤติกรรมการรับประทานที่ตามใจตนเอง
            จนทำให้รับประทานเกินความต้องการของร่างกาย</p>
        <h4>ปัจจัยภายนอก ได้แก่</h4>
        <ul>
            <li>รับประทานอาหารที่ให้พลังงานสูง เนื้อ ไขมัน แป้ง ของหวาน</li>
            <li>รับประทานไม่เป็นเวลา กินจุบกินจิบ</li>
            <li>นั่งๆ นอนๆ เป็นส่วนใหญ่</li>
            <li>ขาดการออกกำลังกาย</li>
        </ul>
        <h4>ปัจจัยภายนอก ได้แก่</h4>
        <ul>
            <li>ความผิดปกติของต่อมไรท่อ เช่น ต้อมใต้สมอง ต่อมไทรอยด์</li>
            <li>ภาวะเครียด</li>
            <li>จิตใจและอารมณ์</li>
            <li>กรรมพันธุ์</li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <h2>อาหารที่เหมาะกับโรคอ้วนโรคอ้วน</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($food as $data)
                <div class="col">
                    <div class="card">
                        <a href="">
                            <img src="{{ asset('storage/img/'.$data->picture) }}" class="card-img-top" style="width: 419px; height:278px;">
                            <div class="card-body" style="width: 200px;">
                                <p class="card-text fs-5">{{ $data->foodname }}</p>
                                <i class="fa-solid fa-fire fs-6"> {{ $data->foodkcal }}</i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
