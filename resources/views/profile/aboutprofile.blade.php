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
        }

        #post_bar {
            margin-top: 20px;
            background-color: white;
            padding: 10px;
            margin: 50px;
            border-radius: 10px;
        }

        #post {
            padding: 4px;
            font-size: 13px;
            display: flex;
        }

        .dropdown {
            float: right;
            overflow: hidden;
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
            <br>
            <ul>
                <li id="menu_buttons">
                    <a href="/profile"> Postingan</a>
                </li>
                <li id="menu_buttons">
                    <a href="/about-profile" id="menu_buttons" class="active"> Tentang</a>
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

    <div id="post_bar">
        <div id="post">
            <p style="font-size: 25px; color:gray; border-bottom:2px solid #FFC600 !important;"> About Me</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, animi quaerat fugiat laboriosam rem
            sint dignissimos? Atque consequuntur quaerat ipsum? Atque quis sit temporibus nobis unde nostrum, natus
            voluptate optio.</p>
        <br>

    </div>
    <div id="post_bar">
        <div id="post">
            <p style="font-size: 25px; color:gray; border-bottom:2px solid #FFC600 !important;"> Contact Information</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, animi quaerat fugiat laboriosam rem
            sint dignissimos? Atque consequuntur quaerat ipsum? Atque quis sit temporibus nobis unde nostrum, natus
            voluptate optio.</p>
        <br>
        <ul>
            <li>Phone: +62 0898 9867 8965</li>
            <li>Alamat: Purnama agung 5 no b2</li>
            <li>Email: wilso.6726@ski.sch.id</li>
            <li>Kelas: 12 TKJ 3</li>
        </ul>

    </div>
    <div id="post_bar">
        <div id="post">
            <p style="font-size: 25px; color:gray; border-bottom:2px solid #FFC600 !important;"> Achievement</p>
        </div>
        <img src="images/coba.jpg" alt="" style="width: 100%; height: 50%;">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, animi quaerat fugiat laboriosam rem
            sint dignissimos? Atque consequuntur quaerat ipsum? Atque quis sit temporibus nobis unde nostrum, natus
            voluptate optio.</p>
        <br>
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


</body>

</html>
