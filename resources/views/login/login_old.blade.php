@extends('template.main')

@section('title', 'Home')

@section('body-container')
    <div class="margin-50">
        <h1 class="big-title mb-51">Let's Sign You In</h1>

        <form action="/mainpage">
            <p class="form-label mb-10">Email Address</p>
            <input type="text" class="placeholder-1 mb-24">
            <p class="form-label mb-10">Password</p>
            <input type="password" class="placeholder-1 mb-24">
            <div class="d-flex justify-content-center">
                <button class="fs-16 yellow btn1 mt-15 mb-51" style="">Sign In</button>
            </div>
            <div class="d-flex justify-content-center text-center line mb-51">
                <div class="group">
                    <div class="item line"></div>
                    <div class="item text">Or</div>
                    <div class="item line"></div>
                </div>
            </div>

            <div class="google-btn">
                <div class="content fs-14" style="background: #fff">
                    <img src="img/grommet-icons_google.png" alt="">
                    Sign in with Google
                </div>
            </div>
            <div class="google-btn mt-15">
                <div class="content fs-14" style="background: #3B5998; color:#fff">
                    <img src="img/dashicons_facebook.png" alt="">
                    Sign in with Facebook
                </div>
            </div>
    </div>



    </form>
@endsection
