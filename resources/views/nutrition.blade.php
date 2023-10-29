@extends('layouts.index')
@section('content')
    <div class="text-center mt-5">
        <img src="{{ asset('img/nutrition.jpg') }}" style="width: 600px;">
    </div>
    <div class="container mt-3 fs-5" style="width: 900px">
        <h2>อาหารผู้สูงอายุ เพื่อสุขภาพดีจึงต้องเลือกกิน</h2>
        <p style="text-indent: 50px;">ผู้สูงอายุ เป็นช่วงวัยที่จำเป็นต้องได้รับการดูแลและเอาใจใส่ในหลาย ๆ ด้าน
            โดยเฉพาะเรื่องอาหารการกิน
            ที่ควรใส่ใจมากเป็นพิเศษ เพื่อให้ร่างกายได้รับสารอาหารที่จำเป็นและเหมาะสมกับสุขภาพ
            แต่วัยเก๋าควรจะกินอะไรเพื่อให้สุขภาพดีบ้างนั้น บทความนี้จาก Hello คุณหมอ มีสาระน่ารู้เกี่ยวกับ อาหารผู้สูงอายุ
            มาฝากค่ะ</p>
        <h3>โภชนาการสำหรับผู้สูงอายุ มีอะไรบ้าง</h3>
        <p>วัยผู้สูงอายุ จำเป็นต้องได้รับสารอาหารที่หลากหลาย เพื่อเสริมสร้างร่างกายให้แข็งแรง โดยโภชนาการสำคัญสำหรับ
            ผู้สูงอายุ ได้แก่</p>
        <ul>
            <li>
                <h4>ไฟเบอร์</h4>
                <p>เมื่ออายุมากขึ้น ระบบเผาผลาญของผู้สูงอายุก็จะเริ่มมีการเสื่อมสภาพ ทำให้เผาผลาญได้น้อยลง
                    และมีผลให้การย่อยอาหารไม่ดีตามมาด้วย ผู้สูงอายุ จึงควรเลือกกินอาหารที่ให้ไฟเบอร์สูง
                    เพราะไฟเบอร์จะช่วยกระตุ้นการทำงานในระบบทางเดินอาหาร ช่วยให้การย่อยอาหารทำได้ดีขึ้น
                    และป้องกันปัญหาท้องผูกที่มักจะพบได้บ่อย ๆ ในกลุ่มผู้สูงอายุ</p>

            </li>
            <li>
                <h4>โปรตีน</h4>
                <p>โปรตีนเป็นสารอาหารทีสำคัญสำหรับทุกเพศและทุกวัย โดยเฉพาะวัยผู้สูงอายุ ควรกินอาหารที่ให้โปรตีนสูง
                    เพื่อช่วยซ่อมแซมส่วนที่สึกหรอของร่างกาย แต่ถ้าให้ดีควรเลือกโปรตีนแบบไม่ติดมัน
                    หรือลีนโปรตีนที่ให้โปรตีนล้วน
                    เพื่อลดปัญหาคอเลสเตอรอลสูง</p>
            </li>
            <li>
                <h4>แคลเซียม</h4>
                <p>แคลเซียมมีส่วนช่วยสำคัญในการเสริมสร้างกระดูกและฟันให้แข็งแรง
                    โดยเฉพาะผู้สูงวัยที่เมื่ออายุมากขึ้นมวลกระดูกและกล้ามเนื้อก็เริ่มที่จะเสื่อมสลายลง เสี่ยงต่อการเปราะ หัก
                    แตก
                    หรือโรคกระดูกพรุน การกินอาหารที่ให้แคลเซียมจะช่วยป้องกันและชะลอโรคกระดูกพรุนได้</p>
            </li>
            <li>
                <h4>วิตามินดี</h4>
                <p>เมื่ออายุมากขึ้นกระบวนการสังเคราะห์วิตามินดีในร่างกายจะเริ่มทำงานได้น้อยลง ผู้สูงอายุ
                    จึงควรได้รับสารอาหารประเภทวิตามินดีเพิ่มมากขึ้น เพื่อให้เพียงพอต่อความต้องการของร่างกาย
                    เพราะวิตามินดีมีส่วนช่วยในการดูดซึมแคลเซียม ทำให้ร่างกายได้รับแคลเซียมอย่างเพียงพอ จึงอาจกล่าวได้ว่า
                    วิตามินดีเองก็เป็นสารอาหารสำคัญในการบำรุงกระดูกด้วยเช่นกัน หากมีวิตามินดีน้อย
                    ร่างกายก็จะดูดซึมแคลเซียมได้ไม่เต็มที่ มีผลต่อความแข็งแรงของมวลกระดูกและกล้ามเนื้อ</p>
            </li>
        </ul>



        <h3>อาหารผู้สูงอายุ ที่ควรรับประทานมีอะไรบ้าง</h3>
        <p>สุขภาพของ ผู้สูงอายุ นั้นมีความเสื่อมลงไปตามอายุขัย ยิ่งอายุมากขึ้นประสิทธิภาพการทำงานของระบบต่าง ๆ
            ในร่างกายก็เริ่มลดลง หนึ่งในวิธีดี ๆ ที่จะช่วยเสริมสุขภาพของผู้สูงอายุก็คือเรื่องอาหารการกิน
            โดยผู้สูงอายุควรเน้นรับประทานอาหารที่มีประโยชน์ ดังนี้</p>
        <ul>
            <li>
                <h4>ผักและผลไม้หลากสี</h4>
                <p>ไดแอน สแตดเลอร์ (Diane Stadler) ผู้ช่วยศาสตราจารย์ด้านการแพทย์ แห่งมหาวิทยาลัย Oregon Health & Science
                    University
                    กล่าวว่า ผักและผลไม้ยิ่งมีสีเข้มเท่าไหร่ก็ยิ่งดีต่อผู้สูงอายุมากเท่านั้น ไม่ว่าจะเป็นผักสีแดงสด
                    ผักใบเขียวเข้ม
                    และผลไม้สีเหลืองสดใส ความหลากสีของผักและผลไม้เหล่านี้เป็นตัวบ่งชี้ว่าอาหารเหล่านั้นเต็มไปด้วยวิตามิน
                    แร่ธาตุ
                    และสารต้านอนุมูลอิสระที่มีประโยชน์ นอกจากนี้ผักและผลไม้ยังให้ไฟเบอร์สูง
                    มีส่วนช่วยกระตุ้นการทำงานของระบบย่อยอาหาร และดีต่อระบบขับถ่ายอีกด้วย</p>
            </li>
            <li>
                <h4>ผลิตภัณฑ์จากนม</h4>
                <p>ไม่ว่าจะวัยเด็ก วัยรุ่น วัยผู้ใหญ่ หรือวัยสูงอายุ
                    นมและผลิตภัณฑ์จากนมถือเป็นอาหารที่มีความสำคัญต่อร่างกายเสมอ
                    เพราะมีทั้งแคลเซียม โปรตีน และวิตามินดี ที่มีส่วนสำคัญในการสร้างความแข็งแรงของมวลกระดูกและกล้ามเนื้อ
                    โดยเฉพาะ
                    ผู้สูงอายุ ที่มวลกระดูกและกล้ามเนื้อเริ่มมีการสึกหรอ การกินอาหารที่มีส่วนประกอบจากนม
                    หรือการดื่มนมเป็นประจำจะช่วยเสริมสร้างกระดูกให้แข็งแรง ทั้งยังช่วยเพิ่มวิตามินดีให้แก่ร่างกายอีกด้วย
                    เพราะการสังเคราะห์วิตามินดีในผู้สูงอายุมักจะทำได้ไม่ค่อยดีแล้ว
                    การดื่มนมหรือกินอาหารที่ทำมาจากนมจะช่วยเสริมวิตามินดีให้เพียงพอต่อความต้องการของร่างกาย</p>
            </li>
            <li>
                <h4>ธัญพืชไม่ขัดสี</h4>
                <p>กลุ่มอาหารจำพวกธัญพืชไม่ขัดสี หรือโฮลเกรน จะมีสารอาหารเต็มเมล็ดมากกว่าธัญพืชที่ผ่านการขัดสี
                    ธัญพืชไม่ขัดสีเหล่านี้มีทั้งวิตามินบีและไฟเบอร์ ที่ดีต่อระบบย่อยอาหาร ระบบขับถ่าย และการทำงานของสมองด้วย
                </p>
            </li>
            <li>
                <h4>ลีนโปรตีน</h4>
                <p>ลีนโปรตีนคือโปรตีนไม่ติดมัน เป็นโปรตีนล้วน ๆ ที่ไม่มีไขมันอยู่เลย อย่างไรก็ตาม
                    แม้ว่าเนื้อสัตว์จะให้โปรตีนที่มีประโยชน์ก็จริง แต่สำหรับ ผู้สูงอายุ ควรเลือกเนื้อสัตว์ที่ไม่ติดมัน
                    เพื่อลดความเสี่ยงที่ผู้สูงอายุจะได้รับปริมาณไขมันอิ่มตัวและคอเลสเตอรอลสูง
                    ในระยะยาวเสี่ยงที่เป็นโรคเรื้อรังได้
                    หรือหากเป็นไปได้ควรกินเนื้อสัตว์ให้น้อยลง และเพิ่มผัก ผลไม้ให้มากขึ้น หรือหากต้องการกินเนื้อสัตว์
                    ก็ควรเลือกเนื้อสัตว์ที่เป็นลีนโปรตีน ไม่มีไขมัน</p>
            </li>
            <li>
                <h4>ปลาที่มีกรดไขมันโอเมก้า 3</h4>
                <p>ปลาเป็นอีกหนึ่งอาหารที่เหมาะสำหรับผู้สูงอายุ แต่ถ้าจะให้ดี
                    ควรเลือกินปลาที่ให้สารอาหารจำพวกกรดไขมันโอเมก้า 3
                    เพราะจะช่วยเสริมสร้างการทำงานของระบบประสาทและสมอง ลดความเสี่ยงของภาวะความจำเสื่อม หรือโรคอัลไซเมอร์
                    ปลาที่มีกรดไขมันโอเมก้า 3 สูง เช่น</p>
                <ul>
                    <li>ปลาทูน่า</li>
                    <li>ปลาแมคเคอเรล</li>
                    <li>ปลาแซลมอน</li>
                    <li>ปลากระพง</li>
                    <li>ปลาโอ</li>
                    <li>ปลาช่อน</li>
                    <li>ปลาดุก</li>
                    <li>ปลาสวาย</li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
