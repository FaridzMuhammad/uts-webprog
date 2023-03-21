<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!--Stylesheet-->
</head>


<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="loginBox">
        <h3>Login Here</h3>
        <form action="/admin/login" method="POST">
            @csrf
            <label for="email">Username</label>
            <input type="email" value="{{ Session::get('email') }}" name="email" placeholder="Email" id="username">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" id="password">
            <button name="submit" type="submit" href="">Log In</button>
        </form>
        {{-- <div class="social">
            <div class="go"><i class="fab fa-google"></i> Google</div>
            <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
        </div> --}}
    </div>
</body>

</html>
