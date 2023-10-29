@extends('layouts.index')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1>หมวดหมู่อาหาร</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคอ้วน</h4>
                        <p class="mb-4">ภาวะที่ร่างกายมีการสะสมไขมันมากเกินกว่าปกติหรือมากเกินกว่าที่ร่างกายจะเผาผลาญ
                            จึงสะสมพลังงานที่เหลือเอาไว้ในรูปของไขมันตามอวัยวะต่างๆ</p>
                        <a class="btn" href="http://127.0.0.1:8000/obesity"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคเบาหวาน</h4>
                        <p class="mb-4">เป็นโรคที่มีน้ำตาลในเลือดสูงกว่าปกติ เกิดเนื่องจากมีอินซูลินน้อย
                            หรือร่างกายไม่ตอบสนองต่ออินซูลิน ทำให้ไม่สามารถนำน้ำตาลไปใช้ได้ตามปกติ</p>
                        <a class="btn" href="http://127.0.0.1:8000/diabetes"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคความดันโลหิตสูง</h4>
                        <p class="mb-4">ความดันโลหิตสูง คือ ค่าความดันภายในหลอดเลือดแดง
                            ซึ่งเกิดจากการบีบตัวของหัวใจเพื่อสูบฉีดเลือดไปเลี้ยงส่วนต่าง ๆ ของร่างกาย</p>
                        <a class="btn" href="http://127.0.0.1:8000/hypertension"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-wheelchair text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคไขมันในเลือดสูง</h4>
                        <p class="mb-4">เป็นภาวะที่ร่างกายมีระดับไขมันในเลือดสูงกว่าปกติ
                            อาจเป็นระดับโคเลสเตอรอลสูงหรือระดับไตรกลีเซอร์ไรด์สูงอย่างใดอย่างหนึ่งหรือสูงทั้งสองชนิดก็ได้
                            ภาวะไขมันในเลือดสูงสามารถทำให้หลอดเลือดแข็ง ตีบ อุดตัน</p>
                        <a class="btn" href="http://127.0.0.1:8000/hyperlipidemia"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-tooth text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคหัวใจขาดเลือด</h4>
                        <p class="mb-4">โรคที่เกิดขึ้นเนื่องจากหลอดเลือดเลี้ยงหัวใจตีบหรือตัน
                            ทำให้กล้ามเนื้อหัวใจมีเลือดไปเลี้ยงลดลงหรือไม่มีเลย เป็นผลให้การทำงานของกล้ามเนื้อหัวใจผิดปกติ
                            หากรุนแรงทำให้เกิดกล้ามเนื้อหัวใจตายได้</p>
                        <a class="btn" href="http://127.0.0.1:8000/heart"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคข้อเข่าเสือม</h4>
                        <p class="mb-4">มีอาการปวดหัวเข่าจากสาเหตุอื่นๆ
                            การมีน้ำหนักตัวที่มากเกินไปจะยิ่งทำให้อาการลุกลามหรือหายช้า
                            จึงควรปรับพฤติกรรมการใช้ชีวิต เช่น ควบคุมน้ำหนัก และการปรับการกินอาหาร</p>
                        <a class="btn" href="http://127.0.0.1:8000/osteoarthritis"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคสมองเสื่อม</h4>
                        <p class="mb-4">เป็นภาวะที่สมองมีการทำงานแย่ลงจนส่งผลต่อชีวิตประจำวัน ประกอบด้วยกลุ่มอาการหลายๆ
                            อย่างรวมกัน เช่น
                            หลงลืมง่าย คิดเงินไม่ถูก หาของไม่เจอ หลงทางในที่คุ้นเคย มีพฤติกรรมแปลกๆ เป็นต้น</p>
                        <a class="btn" href="http://127.0.0.1:8000/dementia"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคเก๊าท์</h4>
                        <p class="mb-4">มีสาเหตุมาจากความผิดปกติของการสะสมกรดยูริค(Uric acid)ในร่างกาย
                            กรดยูริคได้จากการเผาผลาญสารพิวรีนซึ่ง
                            เป็นธาตุอาหารที่ร่างกายสังเคราะห์เองได้และพบได้ทั่วไปในอาหารหลายชนิดโดยปกติเมื่อสารพิวรีนที่ร่างกายได้รับ
                            จะถูกย่อยจนกลายเป็นกรดยูริค</p>
                        <a class="btn" href="http://127.0.0.1:8000/gout"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">โรคไต</h4>
                        <p class="mb-4">ภาวะที่ไตทำงานผิดปกติ มีหลายชื่อเรียก เช่น ไตวาย ไตเสื่อม ไตทำงานลดลง แบ่งเป็น 2
                            ประเภทหลัก
                            คือ 1.โรคไตเฉียบพลัน ซึ่งเกิดขึ้นภายในระยะเวลาไม่เกิน 3 เดือน มีโอกาสรักษาให้หายขาดได้ และ
                            2. โรคไตเรื้อรัง ซึ่งเกิดขึ้นในระยะเวลามากกว่า 3 เดือนขึ้นไป</p>
                        <a class="btn" href="http://127.0.0.1:8000/kidney"><i
                                class="fa fa-plus text-primary me-3"></i>อ่านต่อ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
