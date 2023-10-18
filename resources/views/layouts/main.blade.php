<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>
    <header class="p-3 border-bottom" style="background-color: #4db056; padding: 8px;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/"
                    class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <img src="{{ asset('img/logo.png') }}" alt="" class="logo">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
                    style="font-size: 24px;">
                    <li><a href="{{ url('/')}}" class="nav-link px-2 link-secondary text-light">หน้าหลัก</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light link-secondary" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            โรคในผู้สูงอายุ
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="{{ url('/obesity') }}">โรคอ้วน</a></li>
                            <li><a class="dropdown-item" href="{{ url('/diabetes2') }}">โรคเบาหวาน</a></li>
                            <li><a class="dropdown-item" href="{{ url('/blood_pressure3') }}">โรคความดันโลหิตสูง</a></li>
                            <li><a class="dropdown-item" href="{{ url('/High_blood_fat') }}">โรคไขมันในเลือดสูง</a></li>
                            <li><a class="dropdown-item" href="{{ url('/Osteoarthritis') }}">โรคข้อเสื่อม</a></li>
                            <li><a class="dropdown-item" href="#">โรคหัวใจขาดเลือด</a></li>
                            <li><a class="dropdown-item" href="#">โรคสมองเสื่อม</a></li>
                            <li><a class="dropdown-item" href="#">โรคซึมเศร้า</a></li>
                            <li><a class="dropdown-item" href="#">อาการวิตกกังวลและนอนไม่หลับ</a></li>
                            <li><a class="dropdown-item" href="#">โรคเกี่ยวกับทางเดินอาหาร</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link text-light link-secondary" aria-disabled="true"
                            href="{{url('/calculator')}}">แคลอรี่</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                @if (Route::has('login'))
                    @auth
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" style="">
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="{{ url('/foodupload')}}">เพิ่มรายการ</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        {{ __('Sign out') }}
                                    </button>
                                </form>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">เข้าสู่ระบบ</a>
                    @endauth
                @endif


            </div>
        </div>
    </header>

    @yield('content')

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Orasa Hengchuan</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>

    <a class="lineLink" href="https://lin.ee/vzKDpan"><i class="fa-brands fa-line" style="color: #33cc28;"></i></a>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://kit.fontawesome.com/73c417b541.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
