@extends('template.bootstrap')

@section('title','chat')

@section('body-container')



{{-- @foreach ($post as $p)
    <p>{{ $p->created_at->format('d F Y')}}</p>
    <p>{{ $p->pertanyaan }}</p>
    <p>{{ $p->kategori }}</p>
    <br />
@endforeach --}}


<div class="navbar mb-5">        
    <div class="container ">
        <b><i class="fa fa-bars mr-3"></i>&nbsp;&nbsp;&nbsp;<a href="/mainpage" style="color:black">Mading SMK</a></b>
   

    </div>
</div>
<div class="heading">
    <div class="container itam">
        <div class="isi">
            <p class="text-size2 image-text mt-4 mb-3">Belajar dari kemarin Hidup untuk sekarang. 
            Berharap untuk besok. Hal yang paling penting adalah jangan berhenti bertanya</p>

            <input type="text" id="" name="" class="pertanyaan" style="border-width:0" placeholder="Apa Pertanyaanmu?">
        </div>
    </div>
</div>
<div class="navbar mt-3">
    <div class="container">
        <ul class="categori-tag">
            <li>computer</li>
            <li>matematika</li>
            <li>sains</li>
            <li>jaringan</li>
            

        </ul>
        {{-- <>Computer</><p>Matematika</p><p>sains</p><p>Jaringan</p><p>icon</p> --}}
    </div>
</div>
@foreach ($post as $p)
    

<div class="kotak-abu mb-3">
    <div class="bulat-kiri mt-2" style="margin-left:10px;"></div><p class="mt-2" style="margin-bottom:10px;">Wilson AIken Tedjakusuma
        <br />
        <span style="font-size:12px;" >{{ $p->created_at }}</span>            
    </p>
    <textarea disabled class="textarea"> {{ $p->pertanyaan }}</textarea>

    
    <div class="qContent">
        <p class='kotakp'>{{ $p->kategori }}</p>

        <br />
    </div>
    {{-- <div class="bulat-kiri mt-2" style="margin-left:10px;"></div>
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
        
        </div> --}}
    <br />
        
    <p style="margin-left:10px;">View all 983 comments</p>
    <div class="bulat-kiri" style="margin-left:10px;"></div>           
            <input type="text"  placeholder="tambahkan komentar anda" style="margin-top:15px; border-radius:10px;  border-width:0; height:30px; padding:10px; width:360px;">
        </div>
        

@endforeach

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
