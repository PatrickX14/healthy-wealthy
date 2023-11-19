<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stay Healthy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="{{ route('register') }}" class="w-50">
            @csrf
            <h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name" required autofocus autocomplete="username">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required autofocus autocomplete="username">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_confirmation" required autocomplete="current-password">
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" class="form-control" id="" placeholder="Birth Date" name="birthdate" required>
                <label for="floatingPassword">Birth Date</label>
            </div>
            <div class="form-floating mb-2">
                <select class="form-control" name="gender" id="">
                    <option disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="floatingPassword">Gender</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
            <a href="{{ route('login') }}" class="">Already had an account?</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
