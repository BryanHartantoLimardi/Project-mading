@extends('template.bootstrap')

@section('title, member')
@section('body-container')

<body onload="baru()">




<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="col-bg-2">
        <h2 style="margin-top:20px; font-weight:bolder">
        <span class="iconify" data-icon="eva:arrow-ios-back-outline"></span> Group design &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="iconify width" data-icon="carbon:overflow-menu-horizontal" data-width="40"></span></h2>
        <hr />
        <p class="opacity">Selasa, 18 April 2021</p>
            
        <div class="bulat-kiri"></div><p class="bold-nama">Bryan</p>
            <div class="kotak-chat chat-size ">    
                <div class="mt-1">
                    <p style="margin-left:15px;">Halo nama saya Bryan, salam kenal </p>
                </div>
            </div>    
            <div class="bulat-kiri"></div><p class="bold-nama">WIlson</p>
            <div class="kotak-chat-krg chat-size">
                <div class="mt-1">    
                    <p style="margin-left:15px;">iya Halo, nama saya Wilson </p>
                </div>
            </div>   
            <div class="bulat-kanan"></div><p style="text-align:right;" class="bold-nama">You</p>
            <div class="kotak-chat-kanan chat-size">
                <div class="mt-1">                    
                    <p style="margin-left:15px;">Halo nama saya evo, salam kenal </p>
                </div>
            </div>
            <div class="bulat-kiri"></div><p class="bold-nama">Raymond</p>
            <div class="kotak-chat-lbh chat-size"> 
                <div class="mt-1">   
                    <p style="margin-left:15px;">Halo nama saya Raymond, salam kenal ya </p>
                </div>
            </div> 
            <hr /> 
              
        </div>
        <div class="container">
        <div class="inline-block">
            <span class="iconify" data-icon="gg:attachment" data-width="35" style="color: #ffc600;"></span>
        </div>
        <div class="inline-block-input">
            <input type="text" style="width:240px; height:30px; border-radius:5px; border-width:1px;" value="write your message">
        </div>  
        <div class="inline-block-go">
            <span class="iconify" data-icon="fluent:send-24-filled" data-width="30" style="color: #ffc600;"></span>
        </div>      
    </div>
</div>
    <div class="content-luar">
        <div class="luar">
            <span class="iconify" data-icon="bi:chat-fill" data-width="30" style="color: white;"></span>
        </div>
    </div>


    </div>


    

</body>

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
        span.onclick = function() {
        modal.style.display = "none";
        }
        
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
