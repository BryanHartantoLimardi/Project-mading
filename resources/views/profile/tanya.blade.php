<!DOCTYPE html>
<html>

<head>
    <title>Tentang</title>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div style="width: 100%; margin:auto; background-color:black; min-height:400px;">
        <div style="text-align: center; background-color:white;">
            <img src="images/sekolah.jpg" alt="" style="width: 100%; filter:brightness(60%);">
            <img id="profile_pic" src="images/profil.png" alt="foto" style="position: relative">
            <br>
            <p class="profile-name">Wilson Aiken Tedjakusuma</p>

            <br>
            <ul class="tabs_buttons">
                <li id="menu_buttons">
                    <a href="/profile" class="tabs"> Postingan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/about-profile" class="tabs"> Tentang</a>
                </li>
                <li id="menu_buttons">
                    <a href="/pertanyaan-profile" class="tabs active"> Pertanyaan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/edit-profile" class="tabs"> Edit Profile</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="post_bar" style="margin:10px; background-color:#f8f8f8">
        <!-- Post Header -->
        <div id="post">
            <div class="profile">
                <img src="images/profil.png" alt=""
                    style="width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;">
                <p class="post-profile-name">Wilson Aiken Tedjakusuma <br> <span>16 Januari 2021</span></p>
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
        <div class="question">
            Teman-teman, cara install extension di Visual Studio Code itu gimana ya, juga ada saran rekomendasi extension yang bagus-bagus ngga? Thanks!
        </div>
        <div class="qna-tags">
            <div class="qna-tag">IT</div>
            <div class="qna-tag">Design</div>
            <div class="qna-tag">Front End</div>
        </div>

        <!-- Tombol-tombol -->
        <ul class="post-reacts">
            <li id="menu_buttons" class="post-react">
                <a href="#"> <i class="far fa-thumbs-up align-middle"></i>Suka</a>
            </li>
            <li id="menu_buttons" class="post-react">
                <a href="#"> <i class="far fa-comment-alt align-middle"></i>Komentar</a>
            </li>
            <li id="menu_buttons" class="post-react">
                <a href="#"> <i class="fas fa-share align-middle"></i>Bagikan</a>
            </li>
        </ul>

        <div class="qna-comments">
            <div class="qna-comment">
                <img src="images/profil.png" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 15px;">
                <div class="qna-comment-box">
                    <b>Anak Brainly</b> <span>4 hours ago</span> <div class="like-btn"><i class="fa fa-heart" aria-hidden="true"></i><span>123</span></div><br>
                    <p>Jawabannya 24, semoga membantu, maaf kalau salah</p>
                </div>
            </div>
            <div class="qna-comment">
                <img src="images/profil.png" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 15px;">
                <div class="qna-comment-box">
                    <b>Anak Brainly</b> <span>4 hours ago</span> <div class="like-btn"><i class="fa fa-heart" aria-hidden="true"></i><span>123</span></div><br>
                    <p>Jawabannya 24, semoga membantu, maaf kalau salah</p>
                </div>
            </div>
        </div>
    </div>