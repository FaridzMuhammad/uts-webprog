<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
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
        <form action="{{ route('login-proses') }}" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" >
            @error('password')
                <div>{{ $message }}</div>
            @enderror
            <div class="bot">
                <a href="/register">Register</a>
                <button class="submit" name="submit" type="submit" href="">Log In</button>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/7a0a10b878.js" crossorigin="anonymous"></script>
</body>

</html>
