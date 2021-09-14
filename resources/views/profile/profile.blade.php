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
</head>

<body>
    <div style="width: 100%; margin:auto; background-color:black; min-height:400px;">
        <div style="text-align: center; background-color:white;">
            <img src="images/sekolah.jpg" alt="" style="width: 100%;">
            <img id="profile_pic" src="images/profil.png" alt="foto">
            <br>
            <p style="font-family: poppins;">Wilson Aiken Tedjakusuma</p>

            <br>
            <ul>
                <li id="menu_buttons">
                    <a href="/profile" class="active"> Postingan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/about-profile" id="menu_buttons"> Tentang</a>
                </li>
                <li id="menu_buttons">
                    <a href="/pertanyaan-profile"> Pertanyaan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/edit-profile"> Edit Profile</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="post_bar" style="margin:10px;">
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
        <div>
            <img src="images/coba.jpg" alt="" style="width: 100%; height: 50%; margin-bottom:12px;">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, cupiditate dignissimos soluta minus
                culpa at qui consectetur recusandae non, enim vel deserunt architecto suscipit praesentium earum
                voluptatem quibusdam accusantium asperiores.</p>
            <br>
        </div>

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
