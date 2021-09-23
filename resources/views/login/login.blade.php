@extends('template.main')

@section('title', 'Login')

@section('body-container')


<!-- @if(session()->has('LoginError'))
<div class="alert alert-danger alert-dismissable fade show" role="alert">
    {{ session('LoginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif -->

    <div class="container login-container">
        <h1>Let's Sign you In</h1>
        <p class="text-muted">Log in with your data that you entered <br> during your registration</p>

        <form action="/login" method="post">
        @csrf
            <div class="login-form-area">
                
                <input type="text" class="login-input" placeholder="Email Address" name="email" required>
                <input type="text" class="login-input" placeholder="Password" name="password" required>

                <button type="submit" class="login-button">Sign In</button>
                <p class="m-2 text-muted login-text">Don't have an account? <a href="">Register</a></p>
            </div>
        </form>

        <div class="line-text">
            <span class="line-text-field">Or</span>
        </div>

        <div class="other-login-area">
            <button class="google-login other-login"><img src="img/grommet-icons_google.png" alt=""><span
                    class="m-3">Continue with
                    Google</span></button>
            <button class="facebook-login other-login"><img src="img/dashicons_facebook.png" alt=""><span
                    class="m-3">Continue with
                    Facebook</span> </button>
        </div>
    </div>
@endsection
