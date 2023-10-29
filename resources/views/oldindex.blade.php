@extends('layouts.index')
@section('content')
    {{-- <x-login-layout/> --}}
    <div class="container">
        <img class="introBackground"
            src="https://th.bing.com/th/id/R.74529d7e867ebe787038cc1e69ce7f5e?rik=N71f0aQfNWV7HQ&riu=http%3a%2f%2fmuskokaseniorcare.com%2fwp-content%2fuploads%2f2014%2f09%2fHow-To-Advocate-For-Your-Elderly-Parents-1024x707.png&ehk=SE%2bzKAkP1Z2FHq4uCpMKHRBf6kE%2bd8k0RVmY2DbGs58%3d&risl=&pid=ImgRaw&r=0">
        <div class="px-4 py-5 my-5 text-center" style="height: 100%;">
            <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
            <div class="col-lg-6 mx-auto " >
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most
                    popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคอ้วน</h3>
                        <p class="card-text mb-auto">
                            ภาวะที่ร่างกายมีการสะสมไขมันมากเกินกว่าปกติหรือมากเกินกว่าที่ร่างกายจะเผาผลาญ
                            จึงสะสมพลังงานที่เหลือเอาไว้ในรูปของไขมันตามอวัยวะต่างๆ ซึ่งมีความเสี่ยงต่อการเกิดปัญหาสุขภาพ
                            และเป็นสาเหตุของการเกิดโรคเรื้อรังต่างๆ ตามมาปริมาณพลังงานอ้างอิงที่ครวได้รับประทานประจำวัน</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคเบาหวาน</h3>
                        <p class="mb-auto">เป็นโรคที่มีน้ำตาลในเลือดสูงกว่าปกติ เกิดเนื่องจากมีอินซูลินน้อย
                            หรือร่างกายไม่ตอบสนองต่ออินซูลิน ทำให้ไม่สามารถนำน้ำตาลไปใช้ได้ตามปกติ มีอาการปัสสาวะบ่อย
                            หิวน้ำบ่อย
                            น้ำหนักลด ผลในระยะยาวทำให้เกิดโรคเบาหวานข้นตา เบาหวานลงไต โรคหัวใจและหลอดเลือดตีบแข็งและอื่นๆ
                        </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            < x="50%" y="50%" fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคความดันโลหิตสูง</h3>
                        <p class="card-text mb-auto">
                            ความดันโลหิตสูง คือ ค่าความดันภายในหลอดเลือดแดง
                            ซึ่งเกิดจากการบีบตัวของหัวใจเพื่อสูบฉีดเลือดไปเลี้ยงส่วนต่าง ๆ ของร่างกาย โดยจะวัดได้ 2 ค่า </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคไขมันในเลือดสูง</h3>
                        <p class="mb-auto">เป็นภาวะที่ร่างกายมีระดับไขมันในเลือดสูงกว่าปกติ
                            อาจเป็นระดับโคเลสเตอรอลสูงหรือระดับไตรกลีเซอร์ไรด์สูงอย่างใดอย่างหนึ่งหรือสูงทั้งสองชนิดก็ได้
                            ภาวะไขมันในเลือดสูงสามารถทำให้หลอดเลือดแข็ง ตีบ อุดตัน
                            ซึ่งเป็นปัจจัยเสี่ยงสำคัญที่ทำให้เกิดโรคหัวใจและหลอดเลือด </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            < x="50%" y="50%" fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคข้อเข่าเสือม</h3>
                        <p class="card-text mb-auto">
                            มีอาการปวดหัวเข่าจากสาเหตุอื่นๆ การมีน้ำหนักตัวที่มากเกินไปจะยิ่งทำให้อาการลุกลามหรือหายช้า
                            จึงควรปรับพฤติกรรมการใช้ชีวิต เช่น ควบคุมน้ำหนัก และการปรับการกินอาหาร
                            แม้ว่าอาหารที่กินนั้นจะไม่ได้ช่วยในการรักษาโรคโดยตรง
                            แต่หากผู้ป่วยได้รับสารอาหารที่เหมาะสมก็จะลดปัญหาเรื่องน้ำหนักตัว และลดโอกาสการเกิดการอักเสบ
                            อีกทั้งยังช่วยเสริมสร้างข้อกระดูกรวมถึงกล้ามเนื้อให้แข็งแรงได้อีกทางหนึ่ง </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคหัวใจขาดเลือด</h3>
                        <p class="mb-auto">โรคที่เกิดขึ้นเนื่องจากหลอดเลือดเลี้ยงหัวใจตีบหรือตัน
                            ทำให้กล้ามเนื้อหัวใจมีเลือดไปเลี้ยงลดลงหรือไม่มีเลย เป็นผลให้การทำงานของกล้ามเนื้อหัวใจผิดปกติ
                            หากรุนแรงทำให้เกิดกล้ามเนื้อหัวใจตายได้ การที่หลอดเลือดเลี้ยงหัวใจตีบหรือตันนั้น
                            ส่วนใหญ่แล้วเกิดจากมีไขมันสะสมในผนังด้านในของหลอดเลือด
                            เป็นผลให้ทางที่เลือดไหลผ่านแคบลง เลือดไหลไม่สะดวก กล้ามเนื้อหัวใจจึงได้รับเลือดน้อยกว่าปกติ
                            นอกจากนั้นยังอาจเกิดจากเกร็ดเลือดและลิ่มเลือดอุดตันอีกด้วย </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            < x="50%" y="50%" fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคสมองเสื่อม</h3>
                        <p class="card-text mb-auto">
                            เป็นภาวะที่สมองมีการทำงานแย่ลงจนส่งผลต่อชีวิตประจำวัน ประกอบด้วยกลุ่มอาการหลายๆ อย่างรวมกัน เช่น
                            หลงลืมง่าย คิดเงินไม่ถูก หาของไม่เจอ หลงทางในที่คุ้นเคย มีพฤติกรรมแปลกๆ เป็นต้น</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">โรคเก๊าท์</h3>
                        <p class="mb-auto">มีสาเหตุมาจากความผิดปกติของการสะสมกรดยูริค(Uric acid)ในร่างกาย
                            กรดยูริคได้จากการเผาผลาญสารพิวรีนซึ่ง
                            เป็นธาตุอาหารที่ร่างกายสังเคราะห์เองได้และพบได้ทั่วไปในอาหารหลายชนิดโดยปกติเมื่อสารพิวรีนที่ร่างกายได้รับ
                            จะถูกย่อยจนกลายเป็นกรดยูริค </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            อ่านต่อ
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            < x="50%" y="50%" fill="#eceeef" dy=".3em">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">โรคไต</h3>
                            <p class="card-text mb-auto">
                                ภาวะที่ไตทำงานผิดปกติ มีหลายชื่อเรียก เช่น ไตวาย ไตเสื่อม ไตทำงานลดลง แบ่งเป็น 2 ประเภทหลัก
                                คือ 1.โรคไตเฉียบพลัน ซึ่งเกิดขึ้นภายในระยะเวลาไม่เกิน 3 เดือน มีโอกาสรักษาให้หายขาดได้ และ
                                2. โรคไตเรื้อรัง ซึ่งเกิดขึ้นในระยะเวลามากกว่า 3 เดือนขึ้นไป
                                รักษาไม่หายขาดและอาจดำเนินโรคต่อเนื่องจนเข้าสู่โรคไตเรื้องรังระยะสุดท้าย
                                ซึ่งอาจจำเป็นต้องได้รับการรักษาด้วยการบำบัดทดแทนไต</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                อ่านต่อ
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0">โรคกระเพาะ</h3>
                            <p class="mb-auto">มีสาเหตุมาจากความผิดปกติของการสะสมกรดยูริค(Uric acid)ในร่างกาย
                                กรดยูริคได้จากการเผาผลาญสารพิวรีนซึ่ง
                                เป็นธาตุอาหารที่ร่างกายสังเคราะห์เองได้และพบได้ทั่วไปในอาหารหลายชนิดโดยปกติเมื่อสารพิวรีนที่ร่างกายได้รับ
                                จะถูกย่อยจนกลายเป็นกรดยูริค </p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                อ่านต่อ
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                < x="50%" y="50%" fill="#eceeef" dy=".3em">
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 20px;">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคอ้วน.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคอ้วน</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคเบาหวาน.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคเบาหวาน</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคความดันโลหิตสูง.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคความดันโลหิตสูง</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคไขมันในเลือดสูง.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคไขมันในเลือดสูง</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคข้อเข่าเสือม.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคข้อเข่าเสือม</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคหัวใจขาดเลือด.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคหัวใจขาดเลือด</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคสมองเสื่อม.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคสมองเสื่อม</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคเก๊าท์.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคเก๊าท์</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคไต.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคไต</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('img/โรค/โรคกระเพาะ.jpg') }}" class="card-img-top"
                                style="height: 260px; weidht: 420px;">
                            <div class="card-body">
                                <h3 class="card-text">โรคกระเพาะ</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/obesity" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
