@extends('template.main')

@section('title', 'Home Login')

@section('body-container')
    <div class="navbar">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/">About us</a>
            <a href="#">Our service</a>
            <a href="#">Contact us</a>
            <a href="#">Q&A</a>
            <a href="/profile">Profile</a>
        </div>

        <div class="container">
            <b><i class="fa fa-bars mr-3" onclick="openNav()"></i>&nbsp;&nbsp;&nbsp;Mading Sekolah</b>
        </div>
    </div>
    <div class="heading">
        <div class="container itam">
            <div class="isi">
                <b class="b-head mb-3">Welcome To Mading <br> Wilson</b>
            </div>
        </div>
    </div>
    <div class="body-content">
        <div class="container">

            <div class="mhn-slide owl-carousel">
                <div class="mhn-item">

                    <div class="mhn-inner" style="">
                        <img src="https://storage.googleapis.com/gd-wagtail-prod-assets/
                                                        original_images/evolving_google_identity_2x1.jpg">

                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?fire">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Fire</h4>
                                <p>Fire is the rapid oxidation of a material in the exothermic chemical process of
                                    combustion,
                                    releasing heat, light, and various reaction products.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?nature">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Nature</h4>
                                <p>Nature, in the broadest sense, is the natural, physical, or material world or universe.
                                    "Nature" can refer to the phenomena of the physical world, and also to life in general.
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?video">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Video</h4>
                                <p>Video is an electronic medium for the recording, copying, playback, broadcasting, and
                                    display
                                    of moving visual media.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?hiking">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Hiking</h4>
                                <p>Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk,
                                    usually on trails (footpaths), in the countryside, while the word walking is used for
                                    shorter, particularly urban walks.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?future">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Future</h4>
                                <p>The future is the time after the present. Future or The Future may also refer to: Futures
                                    contract, a standardized financial contract; Future (programming) · Future tense, in
                                    grammar. Contents.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/detail-img" class="detail-img-style">
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="https://source.unsplash.com/600x400/?music">
                            <div class="mhn-img">
                                <div class="loader-circle">
                                    <div class="loader-stroke-left"></div>
                                    <div class="loader-stroke-right"></div>
                                </div>

                            </div>
                            <div class="mhn-text">
                                <h4>Music</h4>
                                <p>Music is an art form and cultural activity whose medium is sound organized in time. The
                                    common elements of music are pitch rhythm dynamics (loudness and softness), and the
                                    sonic
                                    qualities of timbre and texture (which are sometimes termed the "color" of a musical
                                    sound).
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="mhn-item">
                    <div class="mhn-inner">
                        <img src="https://source.unsplash.com/600x400/?money">
                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>
                        <div class="mhn-text">
                            <h4>Money</h4>
                            <p>Money is any item or verifiable record that is generally accepted as payment for goods and
                                services and repayment of debts in a particular country or socio-economic context.</p>
                        </div>
                    </div>
                </div>
                <div class="mhn-item">
                    <div class="mhn-inner">
                        <img src="https://source.unsplash.com/600x400/?happiness">
                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>
                        <div class="mhn-text">
                            <h4>Happiness</h4>
                            <p>In psychology, happiness is a mental or emotional state of well-being which can be defined
                                by, among others, positive or pleasant emotions ranging from contentment to intense joy.</p>
                        </div>
                    </div>
                </div>
                <div class="mhn-item">
                    <div class="mhn-inner">
                        <img src="https://source.unsplash.com/600x400/?nepal">
                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>
                        <div class="mhn-text">
                            <h4>Nepal</h4>
                            <p>Nepal is a landlocked central Himalayan country in South Asia. Nepal is divided into 7 states
                                and 77 districts and 744 local units including 4 metropolises, 13 sub-metropolises, 246
                                municipal councils and 481 villages.</p>
                        </div>
                    </div>
                </div>
                <div class="mhn-item">
                    <div class="mhn-inner">
                        <img src="https://source.unsplash.com/600x400/?love">
                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>
                        <div class="mhn-text">
                            <h4>Love</h4>
                            <p>Love encompasses a variety of different emotional and mental states, typically strongly and
                                positively experienced, ranging from the deepest interpersonal affection to the simplest
                                pleasure.</p>
                        </div>
                    </div>
                </div>
                <div class="mhn-item">
                    <div class="mhn-inner">
                        <img src="https://source.unsplash.com/600x400/?sports">
                        <div class="mhn-img">
                            <div class="loader-circle">
                                <div class="loader-stroke-left"></div>
                                <div class="loader-stroke-right"></div>
                            </div>

                        </div>
                        <div class="mhn-text">
                            <h4>Sports</h4>
                            <p>A sport is commonly defined as an athletic activity or skill and involves a degree of
                                competition, such as tennis or basketball. Some games and many kinds of racing are called
                                sports.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12">
                    <select id="cars">
                        <option value="volvo">3D</option>
                        <option value="saab">Abstrac</option>
                        <option value="vw">Animals</option>
                        <option value="audi">Art</option>
                        <option value="audi">Computer</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-md-4" style="margin-top: 40px;">
                    <img src="https://source.unsplash.com/600x400/?fire" width="100%">
                </div>

                <div class="col-md-4" style="margin-top: 40px;">
                    <img src="https://source.unsplash.com/600x400/?fire" width="100%">
                </div>

                <div class="col-md-4" style="margin-top: 40px;">
                    <img src="https://source.unsplash.com/600x400/?fire" width="100%">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center; text-decoration-style: bold; font-size: 20px;">Q&A</p>
                </div>
                <div class="row">
                    <div class="mapel col-md-12">
                        <ul>
                            <li><a href="#computer">Computer</a></li>
                            <li><a href="#matematika">Matematika</a></li>
                            <li><a href="#sains">Sains</a></li>
                            <li><a href="#jaringan">Jaringan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 80px;">
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <div class="container">
                        <div class="row justify-content-center mb-4">
                            <div class="col-lg-8">
                                <h5>2 Comments</h5>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="col-lg-8">
                                <div class="comments">
                                    <div class="comment d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="avatar avatar-sm rounded-circle">
                                                <img class="avatar-img"
                                                    src="https://uifaces.co/our-content/donated/AW-rdWlG.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-2 ms-sm-3">
                                            <div class="comment-meta d-flex align-items-baseline">
                                                <h6 class="me-2">Jordan Singer</h6>
                                                <span class="text-muted">2d</span>
                                            </div>
                                            <div class="comment-body">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum
                                                at amet doloremque qui magni, placeat deserunt pariatur itaque laudantium
                                                impedit aliquam eligendi repellendus excepturi quibusdam nobis esse
                                                accusantium.
                                            </div>

                                            <div class="comment-replies bg-light p-3 mt-3 rounded">
                                                <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies
                                                </h6>

                                                <div class="reply d-flex mb-4">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <img class="avatar-img"
                                                                src="https://images.unsplash.com/photo-1501325087108-ae3ee3fad52f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=f7f448c2a70154ef85786cf3e4581e4b"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                                        <div class="reply-meta d-flex align-items-baseline">
                                                            <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                            <span class="text-muted">2d</span>
                                                        </div>
                                                        <div class="reply-body">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reply d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <img class="avatar-img"
                                                                src="https://uifaces.co/our-content/donated/6f6p85he.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                                        <div class="reply-meta d-flex align-items-baseline">
                                                            <h6 class="mb-0 me-2">James Parsons</h6>
                                                            <span class="text-muted">1d</span>
                                                        </div>
                                                        <div class="reply-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Distinctio dolore sed eos sapiente, praesentium.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar avatar-sm rounded-circle">
                                                <img class="avatar-img"
                                                    src="https://uifaces.co/our-content/donated/EPx48HPQ.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex-shrink-1 ms-2 ms-sm-3">
                                            <div class="comment-meta d-flex">
                                                <h6 class="me-2">Santiago Roberts</h6>
                                                <span class="text-muted">4d</span>
                                            </div>
                                            <div class="comment-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in
                                                corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="comment-form d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img"
                                                src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                        <form>
                                            <textarea class="form-control py-0 px-1 border-0" rows="1"
                                                placeholder="Start writing..." style="resize: none;"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-center">
                <div class="top mt-3">
                    <hr class="line-decoration">
                    <h4>Contact Us</h4>
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
                        <div class="col-4">
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
