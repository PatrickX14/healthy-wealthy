@extends('layouts.index')
@section('content')
    <div class="text-center mt-5">
        <img src="{{ asset('img/disease/diabetes.jpg') }}" class="rounded" alt="...">
    </div>
    <div class="container mt-3">
        <h1>โรคกระเพาะ</h1>
        <p style="text-indent: 50px;">โรคกระเพาะอาหารอักเสบ (Gastritis) หรือที่ว่าโรคกระเพาะ
            เป็นโรคที่เกิดจากการอักเสบหรือเกิดการระคายเคืองบริเวณเยื่อบุภายในกระเพาะอาหาร
            สามารถเกิดขึ้นได้แบบเฉียบพลันในระยะเวลารวดเร็ว เป็นในระยะสั้น ๆ และหายภายใน 1-2 สัปดาห์
            หรือมีอาการบ่อยครั้งเป็นระยะเวลานานจนเกิดการอักเสบเรื้อรัง ทำให้เกิดแผล
            และเพิ่มความเสี่ยงในการเป็นโรคมะเร็งกระเพาะอาหารได้</p>
        <h4>อาการของโรคกระเพาะอาหารอักเสบ</h4>
        <p>อาการที่เกิดขึ้นกับผู้ป่วยแต่ละรายอาจมีความแตกต่างกันออกไป หรือในบางรายอาจไม่พบอาการชัดเจน
            ผู้ป่วยส่วนใหญ่มาพบแพทย์ด้วยอาการปวดท้อง รู้สึกไม่สบายช่องท้องส่วนบน มีอาการท้องเฟ้อ อิ่มง่าย จุกหน้าอก แน่นท้อง
            เรอบ่อย อาหารไม่ย่อย หรือรู้สึกคลื่นไส้หลังการรับประทานอาหาร ไม่มีความอยากอาหาร</p>
        <p>ทั้งนี้ โรคกระเพาะอาหารอักเสบไม่พบที่มีอาการร้ายแรง แต่หากอาการดังกล่าวเกิดขึ้นนานเป็นสัปดาห์หรือมากกว่านั้น
            โดยเฉพาะอยู่ในช่วงการรับประทานยาแอสไพริน (Aspirin) และยาบรรเทาอาการปวดอื่น ๆ มีการอาเจียนเป็นเลือด
            ถ่ายเป็นเลือดหรือมีสีดำผิดปกติ ควรรีบพบแพทย์ทันทีเพื่อหาสาเหตุที่แน่ชัด</p>
        <h4>สาเหตุของโรคกระเพาะ</h4>
        <p>โรคกระเพาะอาหารอักเสบยังไม่พบสาเหตุการเกิดโรคที่ชัดเจน แต่สันนิษฐานว่าอาจเกิดได้จาก 2 สาเหตุที่พบได้บ่อย ได้แก่
            การติดเชื้อแบคทีเรีย เฮลิโคแบคเตอร์ ไพโลไร หรือเรียกสั้น ๆ ว่า เอช ไพโลไร (Helicobacter pylorior หรือ H. pylori)
            เป็นเชื้อที่ปนเปื้อนอยู่ในอาหารและน้ำดื่ม </p>
        <p>ส่วนอีกสาเหตุ คือ การรับประทานในกลุ่มยาต้านการอักเสบหรือยาแก้ปวด (Non-Steroidal Anti-Inflammatory Drugs: NSAIDs)
        </p>
        <p>อย่างไรก็ตามยังพบโรคกระเพาะอาหารอักเสบได้จากสาเหตุอื่นเช่นกัน อาทิ การติดเชื้อราบางประเภท การสูบบุหรี่
            การดื่มแอลกอฮอล์และเครื่องดื่มที่มีคาเฟอีน หรือระบบภูมิคุ้มกันตนเองบกพร่องจากโรคบางชนิด เช่น โรคโครห์น (Crohn's
            disease) โรคซาคอยโดซิส (Sarcoidosis) หรือภาวะการอักเสบเรื้อรังทางกระเพาะอาหารอื่น ๆ</p>
        <h4>การป้องกันโรคกระเพาะอาหารอักเสบ</h4>
        <p>การรักษาความสะอาดและสุขอนามัยในการรับประทานอาหารเป็นหลักสำคัญในการป้องกันการเกิดโรคกระเพาะอาหารอักเสบจากการติดเชื้อแบคทีเรีย
            เฮลิโคแบคเตอร์ ไพโลไร เช่น การล้างมือก่อนและหลังรับประทานอาหาร และเลือกรับประทานอาหารที่ถูกสุขลักษณะ</p>
        <p>นอกจากนี้ยังควรหลีกเลี่ยงสิ่งที่กระตุ้นให้เกิดการทำงานที่ผิดปกติของกระเพาะอาหารด้วยการปรับพฤติกรรมการรับประทานอาหาร
            ทั้งการดื่มเครื่องดื่มแอลกอฮอล์และคาเฟอีน ภาวะเครียด
            รวมไปถึงไม่ควรซื้อยาที่ออกฤทธิ์ต่อระบบทางเดินอาหารหรือยาในกลุ่มลดอาการปวดรับประทานเองโดยไม่ปรึกษาแพทย์ เภสัชกร
            หรือพยาบาล</p>
        <h4>การดูแลด้านอาการ</h4>
        <h5>อาหารที่ควรรับประทาน</h5>
        <p pstyle="text-indent: 50px;">สำหรับผู้ป่วยโรคกระเพาะอาหารสิ่งสำคัญที่ควรระมัดระวัง
            คือเรื่องของการรับประทานอาหาร ซึ่งผู้ป่วยโรคนี้ควรที่จะรับประทานทานอาหารอ่อนและย่อยง่ายในช่วงแรก เช่น
            ข้าวต้ม โจ๊ก ซุป ก๋วยเตี๋ยวที่ไม่ใส่น้ำส้มสายชูและพริก หลีกเลี่ยงผักสดปริมาณสูง
            ควรรับประทานผักที่ผ่านความร้อน เช่น การต้ม ลวก ผัด เพราะจะทำให้ย่อยง่าย</p>
        <h5>อาหารที่ไม่ควรรับประทาน</h5>
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
        <h4>อาหารที่เหมาะกับคนที่เป็นโรคเบาหวาน</h4>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($foods as $food)
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 290px;">
                        <a href="#">
                            <img src="{{ asset('storage/img/' . $food->picture) }}" class="card-img-top"
                                style="width: 100%; height:240px;">
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
@endsection
