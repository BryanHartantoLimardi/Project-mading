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
  <a href="/">About us</a>
  <hr>
  <a href="/profile">Profile</a>
  <hr>
  <a href="/Q&A">Q&A</a>
  <hr>

{{-- <div class="profilepic">
    <div class="left-pic">
        <div class="avatar avatar-sm rounded-circle">
                        <img class="avatar-img" src="https://uifaces.co/our-content/donated/AW-rdWlG.jpg" alt="">
        </div>
</div>
<div class="right-pic">
<p class="signinsession">Login in as</p>
<p class="signinsession-bot">Wilson Aiken</p>
</div>
</div> --}}
 
</div>

    <div class="container">
        <b><i class="fa fa-bars mr-3" onclick="openNav()"></i>&nbsp;&nbsp;&nbsp;Mading Sekolah</b>
    </div>
</div>
<div class="heading2 mb-3">
    <div class="container itam">
        <div class="isi2">
            <b class="b-head mb-3">Welcome To Mading <br> {{auth()->user()->name}}</b>
        </div>
    </div>
</div>
{{-- <div class="body-content"> --}}
    <div class="container">
        <div class="isi-main mb-3"> 
            <h1 style="text-align: center; margin-bottom:30px;">Top 3 Creation</h1>
            <a href="/detailprofile" class=""><div class="box">
                <img src="images/post1.png" >
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>

                
            </div>
            </a> 
        </div>

        <div class="isi-main mb-3"> 
            <div class="box">
                <select name="filter" id="filter" style="border:0; background-color:#F4F4F4; border-radius:5px; width:120px; height:35px;">
                    <option class="border" value="category">3D</option>
                    <option value="category">Abstract</option>
                    <option value="category">Animals</option>
                    <option value="category">Art</option>
                    <option value="category">Computer</option>
                    <option value="category">technologies</option>
                </select>
            </div>
        </div>

        <div class="isi-main mb-3"> 
            <a href="/detailprofile" class=""><div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </a></div>
        </div>

        <div class="isi-main mb-3"> 
            <a href="/detailprofile" class=""><div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </a></div>
        </div>

        <div class="isi-main mb-3"> 
            <a href="/detailprofile" class=""><div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </a></div>
        </div>

        <div class="isi-main mb-3"> 
            <a href="/detailprofile" class=""><div class="box"> 
                <img src="images/post1.png">
        
                <p class="text kiri-bawah">FireWatch</p>
                <i class="iconify" id="icon1" data-icon="ant-design:like-filled" data-height="25"></i>
                <p class="text kanan-bawah">60.000</p>
            </a></div>
        </div>
        <br />
        
    </div>
    <br />

    

            <div class="button-ajukan mb-5">
                {{-- <form action="" method="post">
                    {{csrf_field()}} --}}
                    <button  class="ajukan center-block mb-3 bold-ajukan " id="myBtn">Post gambar</button>
                
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    
                      <!-- Modal content -->
                      <div class="row modal-content-raymond">    
                        <div class=" kotak-kuning mb-5">
                            <h2 style="margin-top:15px; font-style:bold;">Post GambarMu</h2>
                        </div>
                        <div class="col-bg-2">            
                            <div class="bulat-kiri"></div><p style="margin-bottom:10px;">Wilson AIken Tedjakusuma
                                <br />
                                <span style="background-color:#FFC600; height:30px; padding-left:15px; padding-right:15px; border-radius:2px;">murid</span>            
                            </p> 
                            <b>Ajukan Pertanyaan</b>
                            <div class="body-contents">
                                <textarea class="tulis-pertanyaan" name="pertanyaan" placeholder="tuliskan pertanyaan mu disini"></textarea>
                                <br />
                                <select class="pilih mb-2" name="kategori" value="test">
                                    <option>Komputer</option>
                                    <option>PPKN</option>
                                    <option>Matematika</option>
                                </select>
                                <br />
                                <button type="submit" style="background-color:#FFC600; padding:10px; border-radius:10px; border-width:0;  width:250px;"> tanyakan pertanyaan mu</button>
                            </div> 
                        {{-- </form>     --}}
                            
                                              
                        </div>
                      </div>
                    </div>
                </body>
            </div>
    

    </div>
    <div class="footer text-center">
        <div class="top mt-3">
            <hr class="line-decoration">
            <h4>Contact Us</h4>
        </div>
        <div class="footer-body">
            <p class="footer-body-text text-size">
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
{{-- </div> --}}
<script>

    

        
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
  
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }


function baru(){
    var modal = document.getElementById("myModal");

    modal.style.display="block";

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
}

</script>
@endsection
