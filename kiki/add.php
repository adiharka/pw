<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav style='height:50px' class="navbar navbar-expand-lg navbar-light bg-dark">
<a class='mx-3' href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
<h5 class='mx-3 text-light' style='margin:0px'>Kiki_023</h5>
</nav>
    <form class="m-3" onsubmit="return validateForm()" style="max-width:400px" method="POST" action="" name="person">
        <h2>Tambah Data</h2>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value='0' id="gender1" checked>
                <label class="form-check-label" for="gender1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value='1' id="gender2">
                <label class="form-check-label" for="gender2">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="kotalahir">Kota Lahir</label>
            <input class="form-control" type="text" name="kotalahir" placeholder="kota lahir">
        </div>
        <div class="form-group mb-3">
            <label for="date">Tanggal Lahir</label>
            <input class="form-control" type="date" name="date">
        </div>
        <div class="form-group mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id='alamat' name="alamat" rows="3"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input class="form-control" type="text" name="kota" placeholder="kota">
        </div>
        <div class="form-group mb-3">
            <button type="submit" name="simpan" class="btn btn-primary mb-3">Tambah</button>
        </div>
    </form>
</body>

</html>

<?php
    include "connection.php";
    if(isset($_POST['simpan']))
    {
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $kota = $_POST['kota'];
        $tanggal = $_POST['date'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];

        mysqli_query($koneksi, "INSERT INTO person_023 VALUES(
            '','$nama','$gender','$kota','$tanggal','$alamat','$kota', 'default.png', '1'
            )") or die(mysqli_error($koneksi));
        
        echo "<div><h5> Data sedang disimpan </h5></div>";
        $url = "index.php";
        echo "<meta http-equiv='refresh'content='0;url=$url'/>";
    }

?>