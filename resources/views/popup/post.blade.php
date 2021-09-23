@extends('template.bootstrap')

@section('title, post')
@section('body-container')

<body onload="baru()" >
    <form action="/mainpage" method="post">
    {{csrf_field()}}
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="row modal-content-raymond">    
        <div class=" kotak-kuning mb-5">
            <h2 style="margin-top:15px; font-style:bold;">Post Pertanyaanmu</h2>
        </div>
        <div class="col-bg-2">            
            <div class="bulat-kiri"></div><p style="margin-bottom:10px;">Wilson AIken Tedjakusuma
                <br />
                <span style="background-color:#FFC600; height:30px; padding-left:15px; padding-right:15px; border-radius:2px;">murid</span>            
            </p> 
            <b>Ajukan Pertanyaan</b>
            <div class="body-contents">
                <textarea class="tulis-pertanyaan" name="pertanyaan">tuliskan pertanyaan mu disini</textarea>
                <br />
                <select class="pilih mb-2" name="kategori" value="test">
                    <option>Komputer</option>
                    <option>PPKN</option>
                    <option>Matematika</option>
                </select>
                <br />
                <button type="submit" style="background-color:#FFC600; padding:10px; border-radius:10px; border-width:0;  width:250px;"> tanyakan pertanyaan mu</button>
            </div> 
        </form>    
            
                              
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
  

    