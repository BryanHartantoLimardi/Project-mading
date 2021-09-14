<!DOCTYPE html>
<html>
<head>
	<title>Tentang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		body{
			min-height: 100px;
			height: auto;
			background-repeat: no-repeat;
			background-color: #FFFFFF;
		}
		#profile_pic{
			width: 150px;
			height: 150px;
			margin-top: -90px;
			border-radius: 50%;
			border: solid 2px white;
		}
		#post_bar{
			margin-top: 20px;
			background-color: white;
			padding: 10px;
			margin: 50px;
			border-radius: 10px;
		}
		#post{
			padding: 4px;
			font-size: 13px;
			display: flex;
		}
		.dropdown{
			float: right;
  			overflow: hidden;
		}
        #tekan{
            border-radius: 15px;
            width: 75%;
            background-color: #FFC600;
            border: 15px;
            margin-top: 15px;
            font-weight: bold;
        }
        #kotak{
            border-radius: 15px;
            margin-top: -15px;
            border: 10px;
            background-color: #f4f4f4;
        }
        #tombol{
            border-radius: 10px;
            margin: 5px;
            border: none;
            float: left;
            margin-top: 40px;
            margin-left: 30px;
            font-weight: bold;
            padding: 7px 15px;
        }

        .row{
            margin-top: 20px;
            font-weight: bold;
        }
	</style>
</head>
<body>
		<div style="width: 100%; margin:auto; background-color: white; min-height:300px;">
			<div style="text-align: center; background-color:white; height:100%;">
				<img src="images/sekolah.jpg" alt="" style="width: 100%; height: 10%; filter: brightness(50%);">
                <img src="images/profil.png" alt="" style="width: 75px; height: 75px; border-radius: 50%; float: left; margin-top: 20px; margin-left: 20px; background-color:white;"> 
                <button id="tombol" style="background-color: #FFC600; color:white;"> Upload new profile </button>
                 <button id="tombol"> Delete </button>
            </div>
        </div>
<br> <br> <br>
        <div class="container">
            <div class="row">
                    <p style="margin-bottom: 5px;">Nama</p>
                    <input type="text" placeholder=" " style="border-radius:10px; width: 97%; height: 30px; margin-left:5px; margin-right: 10px; border:none; background-color: #f4f4f4;">
                    <p style="margin-bottom: 5px;">Alamat</p>
                    <input type="text" placeholder=" " style="border-radius:10px; width: 97%; height: 90px; margin-left:5px; margin-right: 10px; border:none; background-color: #f4f4f4;">
                    <p style="margin-bottom: 5px;">About Me</p>
                    <input type="text" placeholder=" " style="border-radius:10px; width: 97%; height: 90px; margin-left:5px; margin-right: 10px; border:none; background-color: #f4f4f4;">
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-6 d-flex flex-column">
                <p>Phone</p>
                <input type="text" id="kotak">                
                <p>Email</p>
                <input type="text" id="kotak">   
                <button id="tekan"> Save Profile </button>

            </div>
            <div class="col-6 d-flex flex-column">
                <p>Location</p>
                <input type="text" id="kotak">   
                <p>Old Password</p>
                <input type="text" id="kotak">   
                <p>New Password</p>
                <input type="text" id="kotak">   
                <button id="tekan"> Change </button>
            </div>
            </div>
        </div>
</body>
</html>