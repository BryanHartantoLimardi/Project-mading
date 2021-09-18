<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="images/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/3e71492f77.js" crossorigin="anonymous"></script>
<style>
body {font-family: 'Poppins';}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 550px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-left: 95%;
  margin-top: -10px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
hr { 
  border-style: inset;
  border-width: 1px;
  width: 345px;
  margin-left: -20px;
} 
.chat{
    margin-top: -30px;
    color: #ffc600;
    font-size: 20px;
    font-weight: 900;
}
#img{
  width: 41px;
  height: 41px;
}
.img-prof{
  margin: 10px 0 0 10px;
  display: flex;
}
#tag{
  font-size: 13px;
  margin-top: 10px;
}

.icon{
  background-color: #ffc600;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  float: right;
  padding: 10px;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div class="container">
        <div class="row">
            <div class="chat">
            <p><img src="images/img/chat.png" alt="">
            Chat </p>
            <hr>
            </div>
        </div>
    </div>

        <div class="img-prof">
          <img src="images/img/profile.png" alt="" id="img" style="margin-right: 10px;">
            <p>Wilson Aiken<br>
            <span id="tag" >You : Udah dikerjakan blum?  &nbsp; &nbsp; &nbsp; &nbsp; 13m </span></p>
        </div>

        <div class="img-prof">
        <img src="images/img/tio.png" alt="" id="img" style="margin-right: 10px;">
            <p>Tio Rafael<br>
            <span id="tag" >Tio : Aku udah kirimkan design...  &nbsp; 13m </span></p>
        </div>
    
        <div class="img-prof">
          <img src="images/img/fei.png" alt="" id="img" style="margin-right: 10px;">
            <p>Group Design<br>
            <span id="tag" >Feivel : Halo semua welcome  &nbsp; &nbsp; &nbsp; &nbsp; 2m </span></p>
        </div>
    
        <div class="img-prof">
          <img src="images/img/tio.png" alt="" id="img" style="margin-right: 10px;">
            <p>Tio Rafael<br>
            <span id="tag" >Tio : Aku udah kirimkan design...  &nbsp; 13m </span></p>
        </div>    
        
        <div class="img-prof">
          <img src="images/img/tio.png" alt="" id="img" style="margin-right: 10px;">
            <p>Tio Rafael<br>
            <span id="tag" >Tio : Aku udah kirimkan design...  &nbsp; 13m </span></p>
        </div>    
        
        <div class="img-prof">
          <img src="images/img/tio.png" alt="" id="img" style="margin-right: 10px;">
            <p>Tio Rafael<br>
            <span id="tag" >Tio : Aku udah kirimkan design...  &nbsp; 13m </span></p>
        </div>    
  </div>

  
  <div class="icon">
      <img src="images/img/cht.png" alt="" >
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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
</script>

</body>
</html>
