@extends('layouts.index')
@section('content')
    <div class="calCulator">
        <div class="calCulatorForm">
            {{-- <div class="genderContainer">
                <div class="genderSelector">
                    <label for="">Male</label>
                    <input type="radio">
                </div>
                <div class="genderSelector">
                    <label for="">Female</label>
                    <input type="radio">
                </div>
                <select name="" id="genderSelect">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div> --}}
            <div class="list-group">
                <label for="gender">เพศ</label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="male">
                    <span>ผู้ชาย</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
            </div>

            {{-- <div class="list-group">
                <label for="gender">กิจกรรมในชีวิตประจำวัน</label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1"
                        value="male" checked>
                    <span>ไม่ออกกำลังกาย</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
            </div> --}}

            <label for="weight">น้ำหนัก</label>
            <input type="number" name="weight" id="weight" placeholder="กิโลกรัม" class="form-control">
            <strong class="calculatorError" id="weightError">โปรดระบุุน้ำหนัก(กก.)</strong>
            <label for="height">ส่วนสูง</label>
            <input type="number" name="height" id="height" placeholder="เซ็นติเมตร" class="form-control">
            <strong class="calculatorError" id="heightError">โปรดระบุส่วนสูง(ซม.)</strong>
            <label for="age">อายุ</label>
            <input type="number" name="age" id="age" placeholder="ปี" max="100" min="0" class="form-control">
            <strong class="calculatorError" id="ageError">โปรดระบุอายุ(ปี)</strong>
            <label for="output">Output</label>
            <input type="number" id="result" value="0" class="form-control">
            <button class="btn btn-primary mt-3" type="button" id="calculateButton">คำนวน</button>
        </div>
    </div>
    <script src="{{ asset('js/calculator.js') }}"></script>
@endsection
