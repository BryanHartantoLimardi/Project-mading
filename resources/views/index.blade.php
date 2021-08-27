@extends('template.main')

@section('title', 'Home')

@section('body-container')
    <div class="navbar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/">About us</a>
            <a href="#">Our service</a>
            <a href="#">Contact us</a>
            <a href="#">Q&A</a>
            <a href="/login">Login</a>
        </div>

        <div class="container logo-container">
            <b><i class="fa fa-bars mr-3" onclick="openNav()"></i>&nbsp;&nbsp;&nbsp;<a href="/"><img src="img/logo.png"
                        class="logo" alt=""></a></b>
        </div>
    </div>
    <div class="heading-image">
        <div class="container itam">
            <div class="isi">
                <b class="b-head mb-3">Tempat untuk <br> Mengkreasikan Karyamu</b>
                <p class="mb-4 text-size image-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At natus quis
                    sit facere
                    laborum
                    porro vitae
                    temporibus ab omnis accusamus.</p>
                <a href="/login"><button class="btn get-started">Get Started</button></a>
            </div>
        </div>
    </div>
    <div class="body-content-image">
        <div class="container">
            <div class="about-us mb-5">
                <div class="top text-center mt-4 mb-2">
                    <hr class="line-decoration">
                    <h4 class="headline-text">About Us</h4>
                </div>
                <div class="margin-container">
                    <div class="card about-data mb-4">
                        <hr class="line-decoration">
                        <b class="mb-2">Mading Sekolah</b>
                        <p class="text-size">Mading Sekolah ini dirancang khusus oleh anak Immanuel untuk dapat
                            mengkreasikan
                            bakat kalian,
                            mencari
                            kawan atau senior kalian, serta mempertanyakan kendala - kendala kalian di SMK sehingga kakak
                            kelas
                            akan
                            membantu</p>
                    </div>
                    <div class="card about-data">
                        <hr class="line-decoration">
                        <b class="mb-2">12 TKJ 3</b>
                        <p class="text-size">Ide ini dibangun oleh salah satu kelompok di Kelas 12 TKJ 3. Kami membuat ide
                            ini
                            agar dapat membantu
                            Sekolah kita agar dapat lebih membangun sekolah untuk lebih maju dan lebih kedepan</p>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="top text-center mt-3">
                    <hr class="line-decoration">
                    <h4 class="headline-text">Service</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mb-3">
                        <div class="thumb-icon d-flex justify-content-center mb-3">
                            <div class="service-logo mt-4"><i class="fa fa-paper-plane"></i></div>
                        </div>
                        <b class="service-title">Creation</b>
                        <p class="mt-2 text-size margin-container ">Lorem ipsum dolor sit amet, consectetur
                            Elementum purus morbi enim pharetra cursus
                            lectus. Pulvinar pellentesque magna ridiculus</p>
                    </div>
                    <div class="col-lg-12 text-center mb-3">
                        <div class="thumb-icon d-flex justify-content-center mb-3">
                            <div class="service-logo mt-4"><i class="fa fa-commenting"></i></div>
                        </div>
                        <b class="service-title">Chat</b>
                        <p class="mt-2 text-size margin-container">Lorem ipsum dolor sit amet, consectetur
                            Elementum purus morbi enim pharetra cursus
                            lectus. Pulvinar pellentesque magna ridiculus</p>
                    </div>
                    <div class="col-lg-12 text-center mb-5">
                        <div class="thumb-icon d-flex justify-content-center mb-3">
                            <div class="service-logo mt-4"><i class="fa fa-comments"></i></div>
                        </div>
                        <b class="service-title">Q&A</b>
                        <p class="mt-2 text-size margin-container">Lorem ipsum dolor sit amet, consectetur
                            Elementum purus morbi enim pharetra cursus
                            lectus. Pulvinar pellentesque magna ridiculus</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <div class="top mt-3">
                <hr class="line-decoration">
                <h5 class="headline-text">Contact Us</h5>
            </div>
            <div class="footer-body">
                <p class="footer-body-text text-size">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum,
                    perspiciatis!
                </p>

                <div class="footer-input-area my-4">
                    <input type="text" placeholder="Email Address" class="footer-input"><button class="footer-button"><i
                            class="fa fa-angle-double-right"></i></button>
                </div>
                <div class="row footer-list-group mb-4">
                    <div class="col-5">
                        <div class="footer-list text-size">
                            <b class="b-footer">About</b>
                            <a href="#">Our Story</a>
                            <a href="#">Benefits</a>
                            <a href="#">Teams</a>
                            <a href="#">Careers</a>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="footer-list text-size">
                            <b class="b-footer">Help</b>
                            <a href="#">FAQ</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-end">

        </div>
    </div>
@endsection
