<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('signup') }}" method="post">
        @csrf
        <div class="container">
            <label for="uname">Name</label>
            <input type="text" placeholder="Enter Username" name="name" id = "name" required>
            @if ($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
            @endif
            <label for="psw">Email</label>
            <input type="email" placeholder="Enter Email" name="email" id = "email">
            @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
            @endif
            <label for="psw">Password</label>
            <input type="password" placeholder="Enter Password" name="password" id = "password">
            @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
            @endif
            <button type="submit">Register</button>
            <a href = "{{route('home')}}">Login</a>
        </div>
    </form>
</body>
</html>
