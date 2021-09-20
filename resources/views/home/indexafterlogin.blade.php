@extends('template.dheo')

@section('title', 'Home Login')

@section('body-container')
<style>
    img{
        width:350px;
        height:262px;
    }
</style>
<div class="navbar">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About us</a>
  <a href="#">Our service</a>
  <a href="#">Contact us</a>
  <a href="#">Q&A</a>

<div class="profilepic">
    <div class="left-pic">
<div class="avatar avatar-sm rounded-circle">
                <img class="avatar-img" src="https://uifaces.co/our-content/donated/AW-rdWlG.jpg" alt="">
</div>
</div>
<div class="right-pic">
<p class="signinsession">Login in as</p>
<p class="signinsession-bot">Wilson Aiken</p>
</div></div>
 
</div>

    <div class="container">
        <b><i class="fa fa-bars mr-3" onclick="openNav()"></i>&nbsp;&nbsp;&nbsp;Mading Sekolah</b>
    </div>
</div>
<div class="heading mb-3">
    <div class="container itam">
        <div class="isi">
            <b class="b-head mb-3">Welcome To Mading <br> "Session Login Echo di sini"</b>
        </div>
    </div>
</div>
{{-- <div class="body-content"> --}}
    <div class="container">
        <div class="isi-main mb-3"> 
            <div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>

                
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <div class="box">
                <select name="filter" id="filter">
                    <option value="category">Category</option>
                    <option value="category">Like</option>
                    <option value="category">Category</option>
                </select>
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </div>
        </div>
        <br />
        <h5 class="tengah">Lihat Lainnya</h5>
    </div>
    <br />

    <div class="row">
        <div class="col-md-12">
            <h1 class="qna">Q&A</h1>
        </div>
    </div>

    <div class="navbar mt-3">
        <div class="container">
            <ul class="categori-tag mapel">
                <li> <a href="" class="">Computer</a></li>
                <li><a href="" class="">Matematika</a></li>
                <li><a href="" class="">Sains</a></li>
                <li><a href="" class="">Jaringan</a></li>
                

            </ul>
        </div>
    </div>          
    <br />           
      

    <div class="kotak-abu">
        <div class="bulat-kiri mt-2" style="margin-left:10px;"></div><p class="mt-2" style="margin-bottom:10px;">Wilson AIken Tedjakusuma
            <br />
            <span style="font-size:12px;" >16 januari 2021</span>            
        </p>
        <textarea disabled class="textarea"> Cara Mendownload extension di Laravel untuk Code Editor Visual Studio Code itu gimana ya? Dan ada rekomendasi extension yang bagus gak</textarea>

        <div class="qContent">
            <p class='kotakp'>iT</p>
            <p class='kotakp'>Designer</p>
            <p class='kotakp'>jaringan</p>
            <br />
        </div>
        <div class="bulat-kiri mt-2" style="margin-left:10px;"></div>
            <div class="input-icon">        
                <input type="text" class="reply" disabled value="Jadi abang nanti bal bla bla" >
                <i id="user1" class="iconify" data-icon="pepicons:info-filled" data-height="50"></i>
                <i id="user2" class="iconify" data-icon="heroicons-solid:chat-alt" data-height="50"></i>
                <i id="user3" class="iconify" data-icon="wpf:like" data-height="50"></i>
                
            </div>
        <br />
        <div class="bulat-kiri mt-2" style="margin-left:10px;"></div>
            <div class="input-icon">        
                <input type="text" class="reply" disabled value="Jadi abang nanti bal bla bla" >
                <i id="user1" class="iconify" data-icon="pepicons:info-filled" data-height="50"></i>
                <i id="user2" class="iconify" data-icon="heroicons-solid:chat-alt" data-height="50"></i>
                <i id="user3" class="iconify" data-icon="wpf:like" data-height="50"></i>
            
            </div>
        <br />
            
        <p style="margin-left:10px;">View all 983 comments</p>
        <div class="bulat-kiri" style="margin-left:10px;"></div>           
                <input type="text"  placeholder="tambahkan komentar anda" style="margin-top:15px; border-radius:10px;  border-width:0; height:30px; padding:10px; width:360px;">
            
        </div>

        <div class="kotak-abu">
            <div class="bulat-kiri mt-2" style="margin-left:10px;"></div><p class="mt-2" style="margin-bottom:10px;">Wilson AIken Tedjakusuma
                <br />
                <span style="font-size:12px;" >16 januari 2021</span>            
            </p>
            <textarea disabled class="textarea"> Cara Mendownload extension di Laravel untuk Code Editor Visual Studio Code itu gimana ya? Dan ada rekomendasi extension yang bagus gak</textarea>
    
            <div class="qContent">
                <p class='kotakp'>iT</p>
                <p class='kotakp'>Designer</p>
                <p class='kotakp'>jaringan</p>
                <br />
            </div>
            <div class="bulat-kiri mt-2" style="margin-left:10px;"></div>
                <div class="input-icon">        
                    <input type="text" class="reply" disabled value="Jadi abang nanti bal bla bla" >
                    <i id="user1" class="iconify" data-icon="pepicons:info-filled" data-height="50"></i>
                    <i id="user2" class="iconify" data-icon="heroicons-solid:chat-alt" data-height="50"></i>
                    <i id="user3" class="iconify" data-icon="wpf:like" data-height="50"></i>
                    
                </div>
            <br />
            <div class="bulat-kiri mt-2" style="margin-left:10px;"></div>
                <div class="input-icon">        
                    <input type="text" class="reply" disabled value="Jadi abang nanti bal bla bla" >
                    <i id="user1" class="iconify" data-icon="pepicons:info-filled" data-height="50"></i>
                    <i id="user2" class="iconify" data-icon="heroicons-solid:chat-alt" data-height="50"></i>
                    <i id="user3" class="iconify" data-icon="wpf:like" data-height="50"></i>
                
                </div>
            <br />
                
            <p style="margin-left:10px;">View all 983 comments</p>
            <div class="bulat-kiri" style="margin-left:10px;"></div>           
                    <input type="text"  placeholder="tambahkan komentar anda" style="margin-top:15px; border-radius:10px;  border-width:0; height:30px; padding:10px; width:360px;">
                
            </div>
            <br />
            <h5 class="tengah mb-5">Lihat Lainnya</h5>
            <br />


            <div class="button-ajukan mb-5">
                <input type="button" value="ajukan pertanyaan" class="ajukan center-block mb-3 bold-ajukan ">
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
