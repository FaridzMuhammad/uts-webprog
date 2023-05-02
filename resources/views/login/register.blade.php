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
        <h3>Register Here</h3>
        <form action="{{ route('register-proses') }}" method="POST">
            @csrf
            <label for="email">Nama</label>
            <input type="text" name="name" placeholder="name" id="username" value="{{ old('nama') }}">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" id="username" value="{{ old('email') }}">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" id="password">
            <div class="bot">
                <a href="/login">Login</a>
                <button class="submit" name="submit" type="submit" href="">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/7a0a10b878.js" crossorigin="anonymous"></script>
</body>

</html>
