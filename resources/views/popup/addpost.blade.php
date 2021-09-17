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
  border:0;
  width: 368px;
  padding: 20px;
  margin: -46px 0 337px -20px;
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
  /* text-align: center; */
    width: 120.04px;
    height: 153.38px;
    font-size: 64px;
    color: #ffc600;
    margin-left: 105px;
    margin-top:40px;
}
#nama{
  color: #B6B6B6;
  border-radius: 5.26px;
  font-size: 15px;
  margin-top: -30px;
}
.tekan{
  border: none;
  background-color: #ffc600;
  height: 30px;
  width: 100px;
  border-radius: 5px; 
  text-align: center;
  float: right;
  position:relative;
  font-weight: 600; 
}
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color:;
    display: inline-block;
}

#add{
    text-align: center;
    padding-top: 10px;
    color: #ffc600;
    margin-left:110px;
}
.prev-image{
  width:200px; 
  border:none; 
  background:none;
  height:200px;
  margin-right:20px;
  left:-25%;
  top:-10%;
  position:absolute;
}
.plus{
  margin-top:25px;
  margin-left:33px;
}
.naik{
  margin-bottom:50px;
}
.kotak-gambar{
  width:150px; 
  height:150px;
  position:absolute;
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
  <div class="modal-content" style="width: 370px;">
    <span class="close">&times;</span>
    <div class="post">
        <div class="kotak-kuning">
          <p>Post Karyamu</p>
        </div>

        <div class="img-prof">
		      <img src="images/img/profile.png" id="img" style="margin-right: 10px;">
          <div class="inline">
            <span style="margin-bottom:10px;">Wilson AIken</span>
            <span style="background-color:#FFC600; height:30px; padding-left:15px; padding-right:15px; border-radius:2px;">murid</span>   
 
        </div>
        <input class="tekan" type="button"  value="Continue"> <br>
                                               
      </p>
        </div>
        
          <div class="ikon">
            <div class="kotak-gambar">
              <img class="prev-image" id="preview" border="">
            </div>
            
            
              <i class="fas fa-plus plus"></i>
            
          </div>
        <div class="naik">
          <input type="file" name="file" id="file" accept="image/*" onchange="previewImage();" class="inputfile" />
          <br />
        
          <label for="file" id="add">add image</label>
          <br />
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

function previewImage(){
  var file = document.getElementById("file").files;
  if (file.length>0){
    var fileReader = new FileReader();

    fileReader.onload = function (event){
      document.getElementById("preview").setAttribute("src", event.target.result);
    };
    fileReader.readAsDataURL(file[0]);
  }
}


</script>

</body>
</html>


