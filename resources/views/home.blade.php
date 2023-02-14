@extends('layouts/app')
@section('content')
    <div class="homeView flex col w-100vh h-100vh alignCenter justifyCenter ">
        @if (\Session::has('message'))
            <h1>{{ \Session::get('message') }}</h1>
        @endif
            <div class="auth-container flex gap2">
                <div class="hide-box w-50 h-50">kdkkk</div>
                <form action="{{ route('signup') }}" method="post">
                    @csrf
                    <div class="auth-container-register flex col gap2 pad2rem">
                        <h2>Register</h2>
                        <div class="input-group register-input-name flex col">
                            <label for="uname">Name</label>
                            <input type="text" placeholder="Enter Username" name="register-name" id = "name">
                            @if ($errors->has('register-name'))
                                <span>{{ $errors->first('register-name') }}</span>
                            @endif
                        </div>
                        <div class="input-group register-input-email flex col">
                            <label for="psw">Email</label>
                            <input type="email" placeholder="Enter Email" name="register-email" id = "email">
                        </div>
                        <div class="input-group register-input-pass flex col ">
                            <label for="psw">Password</label>
                            <input type="password" placeholder="Enter Password" name="register-password" id = "password">
                            @if ($errors->has('register-password'))
                                <span>{{ $errors->first('register-password') }}</span>
                            @endif
                        </div>
                        <div class="auth-container-submit flex col gap10px">
                            <button type="submit">Register</button>
                            <div class="login-btn flex gap10px">
                                Have an account?
                                <a href = "{{route('home')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{route('postlogin')}}" method="post">
                    @csrf
                    <div class="auth-container-login flex col gap2 pad2rem">
                    <h2>Login</h2>
                    <div class="input-group login-input-name flex col">
                        <label for="uname">Email</label>
                        <input type="text" placeholder="Enter Username" name="email" id = "email">
                        @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input-group login-input-pass flex col">
                        <label for="psw">Password</label>
                        <input type="password" placeholder="Enter Password" name="password" id = "password">
                        @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                        @endif
                        <div class="remember flex gap10px marT10px">
                            <input type = "checkbox">
                            <p>Remember me!</p>
                        </div>
                    </div>
                    <div class="auth-container-submit flex col gap10px">
                        <button type="submit">Login</button>
                        <div class="register-btn flex gap10px">
                            Don't have an account?
                        <a href = "{{route('register')}}">Register</a>
                        </div>
                    </div>
                    <div class="socialite flex gap2 justifyCenter">
                        <a href = "{{route('google-auth')}}"><i id = "instagram-icon" class="instagram-icon fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href = "{{route('facebook-auth')}}"><i id = "facebook-icon" class="facebook-icon fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                </form>
            </div>
    </div>
@endsection

