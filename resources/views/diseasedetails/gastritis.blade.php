@extends('layouts.index')
@section('content')
    <div class="text-center mt-5">
        <img src="{{ asset('img/disease/diabetes.jpg') }}" class="rounded" alt="...">
    </div>
    <div class="container mt-3">
        <h1>โรคกระเพาะ</h1>
        <p style="text-indent: 50px;">เป็นโรคที่เกิดในระบบทางเดินอาหารที่พบได้บ่อยในปัจจุบัน
            ซึ่งเกิดจากพฤติกรรมที่เร่งรีบของคนในยุคนี้ ทำให้มีพฤติกรรมการรับประทานอาหารที่ไม่ถูกต้อง
            ถือเป็นสาเหตุหนึ่งที่ทำให้คนเป็นโรคกระเพาะอาหารอักเสบ โดยพบว่ามีผู้ป่วยโรคนี้ส่วนใหญ่มักมีอาการเป็นๆ
            หายๆ มากถึง 80%</p>
        <h4>สาเหตุของโรคกระเพาะ</h4>
        <p>สาเหตุการเกิดโรคกระเพาะอาหารอักเสบยังไม่ทราบได้อย่างชัดเจน
            แต่พบว่าส่วนใหญ่มักมีปัจจัยเสี่ยงที่ทำให้เกิดโรค ดังนี้</p>
        <ul>
            <li>การติดเชื้อแบคทีเรียนเอชไพโลไร (H.pylori)</li>
            <li>การรับประทานยากลุ่มยาต้านการอักเสบหรือยาแก้ปวด เช่น แอสไพริน ไอบูโพรเฟน เป็นต้น</li>
            <li>สาเหตุอื่นๆ เช่น การสูบบุหรี่ การดื่มแอลกอฮอล์ เป็นต้น</li>
        </ul>
        <h4>อาหารที่ควรรับประทาน</h4>
        <p pstyle="text-indent: 50px;">สำหรับผู้ป่วยโรคกระเพาะอาหารสิ่งสำคัญที่ควรระมัดระวัง
            คือเรื่องของการรับประทานอาหาร ซึ่งผู้ป่วยโรคนี้ควรที่จะรับประทานทานอาหารอ่อนและย่อยง่ายในช่วงแรก เช่น
            ข้าวต้ม โจ๊ก ซุป ก๋วยเตี๋ยวที่ไม่ใส่น้ำส้มสายชูและพริก หลีกเลี่ยงผักสดปริมาณสูง
            ควรรับประทานผักที่ผ่านความร้อน เช่น การต้ม ลวก ผัด เพราะจะทำให้ย่อยง่าย</p>
        <h4>อาหารที่ไม่ควรรับประทาน</h4>
        <p pstyle="text-indent: 50px;">อาหารที่ควรหลีกเลี่ยง คือ อาหารที่มีรสชาติจัด เช่น เผ็ดจัด เปรี้ยวจัด
            อาหารหมักดอง หลีกเลี่ยงน้ำอัดลม กาแฟเข้มข้น เครื่องดื่มที่มีส่วนผสมของแอลกอฮอล์
            ผลไม้ที่มีรสเปรี้ยวจัดและย่อยยาก และไม่ควรรับประทานผลไม้ตอนท้องว่าง เนื่องจากผลไม้บางชนิดมียาง
            หรือเอนไซม์ ซึ่งเมื่อไปรวมกับกรดในกระเพาะอาหาร อาจทำให้คลื่นไส้ และระคายเคืองกระเพาะอาหารได้ เช่น
            ลูกพลับ มะละกอ สับปะรด ส้ม มะนาว ทั้งนี้ ควรรับประทานอาหารให้ใกล้เคียงเวลาเดิม ๆ
            หากติดภารกิจควรรับประทานขนมหรือนมรองท้องไปก่อน</p>
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
