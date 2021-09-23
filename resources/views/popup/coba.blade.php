<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Daguna/style.css">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="css/Daguna/bootstrap.min.css">
<script src="https://kit.fontawesome.com/3e71492f77.js" crossorigin="anonymous"></script>
<style>
  .post{
  background-color: #ffc600;
  height: 60px;
  font-size: 18px;
  border-radius: 6.08px 6.08px 0 0;
  width: 370px;
  padding: 20px;
  margin: -45px 0 420px -21px;
}
#img{
  width: 41px;
  height: 41px;
}
.img-prof{
  margin: 40px 0 0 10px;
  display: flex;
}
.kotak-kuning{
  text-align: center;
  font-weight: 600;
}
.ikon{
  text-align: center;
    border: dotted 2px #ffc600;
    width: 120.04px;
    height: 153.38px;
    padding-top: 46px;
    font-size: 64px;
    color: #ffc600;
    margin-left: 105px;
}
#tag{
  color: #B6B6B6;
  font-size: 15px;
  border-radius: 5.26px;
}
.tekan{
  border: none;
  background-color: #ffc600;
  height: 30px;
  width: 100px;
  border-radius: 5px; 
  text-align: center;
  margin-left: 60px;
  font-weight: 600; 
}
.modal-content{
  width: 370px;
}
#text{
  width: 338px;
  border-radius: 3.73px;
  border: none;
  background-color: #E0E0E0;
  padding: 10px;
  height: 32px;
}
#sushi{
  margin: 11px 10px 9px 3px;
  width: 320px;
  height: 197px;
  text-align: center;
}
#area{
  width: 338px;
  height: 75.65px;
  border-radius: 3.73px;
  border: none;
  background-color: #E0E0E0;
  font-weight: 600;
  color: #777777;
}
</style>
</head>
<body>
p
<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 370px;">
    <span class="close">&times;</span>
    <div class="post">
        <div class="kotak-kuning">
          <p>Post Karyamu</p>
        </div>
        <div class="img-prof">
          <img src="images/img/profile.png" alt="" id="img" style="margin-right: 10px;">
            <p>Wilson Aiken<br>
            <span id="tag" >Murid</span></p>
            <button class="tekan">Continue</button>
        </div>

        <div class="container">
          <div class="row">
            <input type="text" placeholder="Give me a name" id="text">
          </div>
        </div>

        <div>
          <img src="images/img/sushi.png" alt="" id="sushi">
        </div>
        <div style="margin: 8px 0 24px 0;">
          <textarea name="area" id="area" cols="30" rows="10"> Description</textarea>
        </div>

      
  </div>
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
