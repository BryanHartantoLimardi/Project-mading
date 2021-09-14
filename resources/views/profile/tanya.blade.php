<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3e71492f77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Raymond/style.css">
    <style>
        body {
            min-height: 100px;
            height: auto;
            /* background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(images/sekolah.jpg); */
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: #ACE7FF;
        }

        #profile_pic {
            width: 150px;
            height: 150px;
            margin-top: -90px;
            border-radius: 50%;
            border: solid 2px white;
        }

        a {
            display: block;
            text-decoration: none !important;
            color: #FFC600;
            padding: 5px 0;
            margin: 0 10px;
            font-weight: 500;
        }

        #menu_buttons {
            width: 100px;
            display: inline-block;
            margin: 2px;
        }

        a:hover,
        a.active {
            border-bottom: 2px solid #FFC600 !important;
            position: relative;
        }

        #post_bar {
            margin-top: 20px;
            background-color: #CCD2E3;
            padding: 10px;
            margin: 50px;
            border-radius: 10px;

        }

        .profile {
            display: flex;
        }

        #post {
            display: flex;
            justify-content: space-between;
        }

        .dropdown {
            /* float: right; */
            /* overflow: hidden; */
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            color: black;
            padding: 16px;
            border: none;
            background-color: rgba(0, 0, 0, 0);
        }

        .dropdown-content :hover {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 999;
            right: 0;
            border-radius: 10px;
            height: 130px;
        }

        /* .dropdown-content :hover{
  } */

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .show {
            display: block;
        }

        #tag {
            margin: 10px;
            background-color: white;
            border-radius: 5px;
            width: 100px;
            text-align: center;
            display: inline-block;
            margin: 2px;
        }

    </style>
</head>

<body>
    <div style="width: 100%; margin:auto; background-color:black; min-height:400px;">
        <div style="text-align: center; background-color:white;">
            <img src="images/sekolah.jpg" alt="" style="width: 100%;">
            <img id="profile_pic" src="images/profil.png" alt="foto">
            <br>
            <p style="font-family: poppins;">Wilson Aiken Tedjakusuma</p>
            <i></i>
            <br>
            <ul>
                <li id="menu_buttons">
                    <a href="/profile"> Postingan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/about-profile" id="menu_buttons"> Tentang</a>
                </li>
                <li id="menu_buttons">
                    <a href="/pertanyaan-profile" class="active"> Pertanyaan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/edit-profile"> Edit Profile</a>
                </li>
            </ul>
        </div>
    </div>


    <div id="post_bar">
        <!-- Post Header -->
        <div id="post">
            <div class="profile">
                <img src="images/profil.png" alt=""
                    style="width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;">
                <p>Wilson Aiken Tedjakusuma <br> 16 Januari 2021</p>
            </div>
            <div class="kanan dropdown">
                <button class="dropbtn" onclick="tekan()"><i class="fas fa-ellipsis-h"
                        style="font-size: 25px;"></i></button>
                <div id="drop" class="dropdown-content">
                    <a href="#">Delete</a>
                    <hr>
                    <a href="#">Report</a>
                </div>
            </div>
        </div>

        <!-- Isi Postingan -->
        <div style="background-color: white; border-radius: 10px;">
            <p style="margin-left: 15px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, cupiditate
                dignissimos soluta minus culpa at qui consectetur recusandae non, enim vel deserunt architecto suscipit
                praesentium earum voluptatem quibusdam accusantium asperiores.</p>
            <br>
        </div>
        <div style="margin-top: 5px;">
            <p id="tag" style="width: 50px;">IT</p>
            <p id="tag">JARINGAN</p>
            <p id="tag">DESIGN</p>
        </div>
        <p style="color: grey; margin-left:10px;">View all 983 Comments</p>

        <!-- Tombol-tombol -->
        <ul>
            <li id="menu_buttons">
                <a href="#" style="color:black; text-align:center;"> <i class="far fa-thumbs-up">Suka</i></a>
            </li>
            <li id="menu_buttons">
                <a href="#" style="color:black; text-align:right;"> <i class="far fa-comment-alt">Komentar</i></a>
            </li>
            <li id="menu_buttons">
                <a href="#" style="color:black; text-align:center;"> <i class="fas fa-share">Bagikan</i></a>
            </li>
        </ul>
    </div>
    </div>
    <script src="js/java.js"></script>
</body>

</html>
