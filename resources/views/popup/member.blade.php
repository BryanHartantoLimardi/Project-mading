@extends('template.bootstrap')

@section('title, member')
@section('body-container')

<body style="background-color:black">
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="col-bg-2"><h2 style="margin-top:20px; font-weight:bolder"><span class="iconify" 
                data-icon="eva:arrow-ios-back-outline"></span> Group design &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="iconify width" data-icon="carbon:overflow-menu-horizontal" data-width="40"></span></h2>                
                <hr />
                <div class="isi-member">
                    <h3 style="font-width:5px;">Member</h3>
                    <a href="/modal" onclick="return">
                    <div class="bulat-kiri"></div>                    
                        <p style="margin-top:20px;">steven alexander</p>
                    </a>
                    <br />

                    <div class="bulat-kiri"></div><p style="margin-top:10px;">steven alexander</p>
                    <br />
                    <div class="bulat-kiri"></div><p style="margin-top:10px;">steven alexander</p>
                    <br />
                    <div class="bulat-kiri"></div><p style="margin-top:10px;">steven alexander</p>
                </div>
                       
        </div>
    </div>
    <div class="content-luar">
        <div class="luar">
            <span class="iconify" data-icon="bi:chat-fill" data-width="30" style="color: white;"></span>
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