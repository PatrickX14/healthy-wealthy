@extends('layouts.index')
@section('content')
https://www.bing.com/search?q=โรคข้อเข่าเสือม&qs=n&form=QBRE&sp=-1&ghc=1&lq=0&pq=โรคข้อเข่าเสือม&sc=0-15&sk=&cvid=A3308AFA03384867903B44CFB41E597E&ghsh=0&ghacc=0&ghpl=
    <div class="text-center mt-5">
        <img src="{{ asset('img/1.jpg') }}" class="rounded" alt="...">
    </div>
    <div class="container mt-3">
        <h1>โรคข้อเข่าเสือม</h1>
        <p style="text-indent: 50px;">ข้อเข่าเสื่อมมักเกิดมาจากการใช้งานของข้อเข่ามาเป็นเวลานาน (Primary OA knee)
            ส่วนใหญ่จึงพบในผู้สูงอายุ การใช้งานมานานทำให้กระดูกผิวข้อ (cartilage) ของข้อเข่าสึกหรอไปเรื่อยๆ
            เมื่อกระดูกผิวข้อสึกหรอไปจนหมดแล้ว กระดูกข้อเข่าจะมาชนกัน ทำให้เกิดความเจ็บปวดอย่างรุนแรง </p>
        <h4>อาหารที่ผู้ป่วยข้อเข่าเสื่อมควรรับประทาน</h4>
        <ul>
            <li>อาหารมีกรดไขมันโอเมก้า-3 สูง</li>
            <li>อาหารที่มีสารต้านอนุมูลอิสระหรือเบต้าแคโรทีนสูง </li>
            <li>อาหารที่มีแคลเซียมสูง </li>
            <li>อาหารที่อุดมด้วยวิตามินซี </li>
            <li>อาหารที่มีสารกลุ่มไบโอฟลาโวนอยด์  </li>
            <li>ขาดการออกกำลังกาย</li>
            <li>รับประทานอาหารประเภทอบ ต้ม ตุ๋น นึ่ง ย่าง แทนประเภทผัด ทอด หรือแกงกะทิ เพื่อควบคุมน้ำหนักตัว</li>
        </ul>
        <h4>อาหารที่ผู้ป่วยข้อเข่าเสื่อมควรหลีกเลี่ยง</h4>
        <ul>
            <li>อาหารเสริมและวิตามินสำเร็จรูป </li>
            <li>อาหารเค็มหรืออาหารที่มีโซเดียมสูง </li>
            <li>อาหารหวานหรืออาหารที่มีน้ำตาลมาก </li>
            <li>อาหารทอด</li>
            <li>เนื้อสัตว์ที่ปรุงด้วยอุณหภูมิสูงนานๆ</li>
            <li>เครื่องดื่มแอลกอฮอล์ </li>
            <li>กาแฟหรือเครื่องดื่มที่มีคาเฟอีน</li>
        </ul>
        <hr>
    </div>
    {{-- ไม่ต้องแก้ --}}
    <div class="container">
        <h4>อาหารที่เหมาะกับคนที่เป็นโรคอ้วน</h4>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($foods as $food)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 290px;">
                        <a href="{{ asset('foodshow/' . $food->id) }}">
                            <img src="{{ asset('storage/image/' . $food->picture) }}" class="card-img-top"
                                style="width: 100%; height:240px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">{{ $food->foodname }}</p>
                                <i class="fa-solid fa-fire">{{ $food->foodkcal }}</i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- ไม่ต้องแก้ --}}
    <div class="container">
        <h4>อาหารที่ควรหลีกเลี่ยง</h4>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($inedibleFood as $food)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 290px;">
                        <a href="{{ asset('foodshow/' . $food->id) }}">
                            <img src="{{ asset('storage/image/' . $food->picture) }}" class="card-img-top"
                                style="width: 100%; height:240px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">{{ $food->foodname }}</p>
                                <i class="fa-solid fa-fire">{{ $food->foodkcal }}</i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
