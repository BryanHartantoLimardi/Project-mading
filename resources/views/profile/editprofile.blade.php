<!DOCTYPE html>
<html>
<head>
    <title>Tentang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Raymond/style.css">
</head>
<body style="background:white">
    <a href="/mainpage" class=""><img src="images/sekolah.jpg" alt="" style="width: 100%; height: 110px; filter: brightness(50%); object-fit:cover"></a>
    <div class="edit-profile-head">
        <img src="images/profil.png">
        <button class="btn yellow-btn m-3">Upload new picture</button>
        <button class="btn gray-btn">Delete</button>

    </div>
    <div class="row container">
        <form action="" class="edit-profile d-flex flex-column">
            <div class="col-lg-12">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="tb-small w-100">
            </div>
            <div class="col-lg-12">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="tb-big w-100"></textarea>
            </div>
            <div class="col-lg-12">
                <label for="about">About Me</label>
                <textarea type="text" id="about" name="about" class="tb-big w-100"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-lg-6">
                    <label for="phone">Phone</label><br>
                    <input type="text" id="phone" name="phone" class="tb-small w-100"><br>
                    <label for="email">E-mail</label><br>
                    <input type="text" id="email" name="email" class="tb-small w-100"><br>
                    <button class="btn yellow-btn">Save Profile</button>
                </div>
                <div class="col-lg-6">
                    <label for="location">Location</label><br>
                    <input type="text" id="location" name="location" class="tb-small w-100"><br>
                    <label for="old-password">Old Password</label><br>
                    <input type="text" id="old-password" name="old-password" class="tb-small w-100"><br>
                    <label for="new-passowrd">New Password</label><br>
                    <input type="text" id="new-passowrd" name="new-passowrd" class="tb-small w-100"><br>
                   <a href="/mainpage"> <button class="btn yellow-btn">Change</button></a>
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>