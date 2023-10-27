@extends('layouts.main')
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
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1"
                        value="male" checked>
                    <span>ผู้ชาย</span>
                </label>
                <label class="list-group-item d-flex gap-2">
                    <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios"
                        id="listGroupRadios2" value="female">
                    <span>ผู้หญิง</span>
                </label>
            </div>
            <label for="weight">น้ำหนัก</label>
            <input type="number" name="weight" id="weight" placeholder="กิโลกรัม">
            <strong class="calculatorError" id="weightError">โปรดระบุุน้ำหนัก(กก.)</strong>
            <label for="height">ส่วนสูง</label>
            <input type="number" name="height" id="height" placeholder="เซ็นติเมตร">
            <strong class="calculatorError" id="heightError">โปรดระบุส่วนสูง(ซม.)</strong>
            <label for="age">อายุ</label>
            <input type="number" name="age" id="age" placeholder="ปี" max="100" min="0">
            <strong class="calculatorError" id="ageError">โปรดระบุอายุ(ปี)</strong>
            <label for="output">Output</label>
            <input type="number" id="result" value="0">
            <button class="calculateButton" id="calculateButton">Calculate</button>
        </div>
    </div>
    <script src="{{ asset('js/calculator.js') }}"></script>
@endsection
