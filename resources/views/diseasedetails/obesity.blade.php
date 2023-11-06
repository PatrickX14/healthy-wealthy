@extends('layouts.index')
@section('content')
    <div class="text-center mt-5">
        <img src="{{ asset('img/disease/obesity.jpg') }}" class="rounded" alt="...">
    </div>
    <div class="container mt-3 fs-5" style="width: 900px">
        <h2>โรคอ้วน</h2>
        <p style="text-indent: 50px;">ภาวะที่ร่างกายมีการสะสมไขมันมากเกินกว่าปกติหรือมากเกินกว่าที่ร่างกายจะเผาผลาญ
            จึงสะสมพลังงานที่เหลือเอาไว้ในรูปของไขมันตามอวัยวะต่างๆ ซึ่งมีความเสี่ยงต่อการเกิดปัญหาสุขภาพ
            และเป็นสาเหตุของการเกิดโรคเรื้อรังต่างๆ ตามมาปริมาณพลังงานอ้างอิงที่ครวได้รับประทานประจำวัน</p>
        <h4>สาเหตุของโรคอ้วน</h4>
        <p style="text-indent: 50px;">สาเหตุที่ทำให้ผู้สูงอายุเสี่ยงเป็นโรคอ้วน ส่วนใหญ่มาจากการเสื่อมสภาพของระบบต่าง ๆ
            ภายในร่างกายตามช่วงอายุที่มากขึ้น รวมไปถึงค่าดัชนีมวลกาย (BMI) ที่เกินมาตรฐาน โดยวัดจากรอบเอว มวลไขมัน
            น้ำหนักตัว นอกจากนี้ คณะกรรมการของสมาคมโภชนาการและสมาคมโรคอ้วนของสหรัฐอเมริกา
            ได้ทบทวนงานศึกษาวิจัยที่เผยแพร่ในช่วงปี 1996-2005 และพบว่า โรคอ้วนในผู้สูงอายุเชื่อมโยงกับความบกพร่องทางร่างกาย
            อีกทั้งผู้สูงอายุที่น้ำหนักเกินหรือมีโรคอ้วนยังเสี่ยงเกิดปัญหาสุขภาพดังต่อไปนี้มากขึ้นด้วย</p>
        <ul>
            <li>การติดเชื้อไวรัสโควิด-19</li>
            <li>ภาวะหยุดหายใจขณะหลับ</li>
            <li>ภาวะอ้วนลงพุง หรือเมตาบอลิกซินโดรม (Metabolic Syndrome)</li>
            <li><a href="">โรคหลอดเลือดสมอง</a></li>
            <li><a href="">โรคหลอดเลือดหัวใจ</a></li>
            <li><a href="">โรคความดันโลหิตสูง</a></li>
            <li><a href="">โรคเบาหวาน</a></li>
            <li>ปัญหาภายในระบบทางเดินอาหาร</li>
            <li>โรคข้อเข่าเสื่อม</li>
            <li>ปัญหาภายในระบบทางเดินอาหาร</li>
            <li>โรคมะเร็งบางชนิด</li>
        </ul>
        <p>หากปล่อยให้ผู้สูงอายุเผชิญกับโรคอ้วนเป็นเวลานาน อาจทำให้สุขภาพแย่ลง จนเสี่ยงต่อความพิการ หรือเสียชีวิตได้
            นอกจากดัชนีมวลกายแล้ว ยังสามารถสังเกตการเปลี่ยนแปลงบางอย่างที่อาจบ่งบอกได้ว่าผู้สูงอายุกำลังเสี่ยงเป็นโรคอ้วนได้
            เช่น การสะสมของไขมันที่อยู่ใต้ผิวหนังตามส่วนต่าง ๆ โดยเฉพาะ หน้าท้อง แขน ตัวเลขของน้ำหนักเพิ่ม</p>
        <h4>ปัจจัยเสี่ยงภายในของโรคอ้วนในผู้สูงอายุ</h4>
        <p>ปัจจัยที่อาจเพิ่มความเสี่ยงในการเกิดโรคอ้วนในผู้สูงอายุ มีดังนี้</p>
        <ul>
            <li>ความผิดปกติของต่อมไรท่อ เช่น ต้อมใต้สมอง ต่อมไทรอยด์</li>
            <li>การไม่ออกกำลังกายอย่างสม่ำเสมอ</li>
            <li>การรับประทานอาหารที่ทำลายสุขภาพ</li>
            <li>ปัญหาเกี่ยวกับโรคประจำตัว</li>
            <li>ประวัติทางพันธุกรรม</li>
            <li>โรคเบาหวานชนิดที่ 2</li>
            <li>ภาวะเครียด</li>
            <li>จิตใจและอารมณ์</li>
            <li>กรรมพันธุ์</li>
            <li>รับประทานอาหารที่ให้พลังงานสูง เนื้อ ไขมัน แป้ง ของหวาน</li>
            <li>รับประทานไม่เป็นเวลา กินจุบกินจิบ</li>
            <li>นั่งๆ นอนๆ เป็นส่วนใหญ่</li>
            <li>ขาดการออกกำลังกาย</li>
        </ul>
        <h4>วิธีการป้องกันโรคอ้วนในผู้สูงอายุ</h4>
        <p>ผู้สูงอายุสามารถลดความเสี่ยงจากโรคอ้วน และโรคแทรกซ้อนได้ ด้วยวิธีการดังต่อไปนี้</p>
        <ul>
            <li>ออกกำลังกายในระดับเบา เช่น แอโรบิก เดิน</li>
            <li>รับประทานเลือกอาหารที่มีประโยชน์ให้เหมาะสม โดยเฉพาะผลไม้ ผัก และโปรตีน</li>
            <li>ลดอาหารที่มีไขมันสูง น้ำตาลสูง</li>
            <li>เข้ารับการตรวจสุขภาพตามที่คุณหมอกำหนด และตรวจสุขภาพอย่างละเอียด</li>
            <li>รับประทานยาตามที่คุณหมอกำหนด เพื่อรักษาโรคที่เป็น</li>
            <li>หลีกเลี่ยงอาหารเสริมหรือยาที่ช่วยลดความอ้วน เพราะผู้สูงอายุอาจได้รับผลข้างเคียงอันตรายที่เกี่ยวข้องกับหัวใจ
                ลิ้นหัวใจ หลอดเลือด และปอด</li>
        </ul>
        <p>หากผู้สูงอายุเป็นโรคอ้วน อาจต้องเผชิญกับความวิตกกังวลและความเครียด
            ญาติหรือผู้ดูแลควรดูแลสุขภาพจิตของผู้สูงอายุอย่างใกล้ชิด</p>
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
