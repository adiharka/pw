<?php
    include "connection.php";
    $id = $_GET['idperson'];
    $get = mysqli_query($koneksi, "SELECT * FROM person_023 WHERE idperson=$id");
    $data = mysqli_fetch_array($get);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <nav style='height:50px' class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class='mx-3' href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
        <h5 class='mx-3 text-light' style='margin:0px'>Kiki_023</h5>
    </nav>
    <div class="m-3">
        <h2>EDIT DATA</h2>
        <table>
            <td>
                <form enctype="multipart/form-data" style="max-width:400px" method="POST" action="" name="person">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"
                            placeholder="nama">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>

                        <?php 
            if ($data['gender'] == 1) {
            echo '<div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="1" id="gender1" checked>
                <label class="form-check-label" for="gender1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="0" id="gender2">
                <label class="form-check-label" for="gender2">
                    Perempuan
                </label>
            </div>';
            }
            else {
            echo '<div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="1" id="gender1">
                <label class="form-check-label" for="gender1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="0" id="gender2" checked>
                <label class="form-check-label" for="gender2">
                    Perempuan
                </label>
            </div>';
            }
            ?>

                    </div>
                    <div class="form-group mb-3">
                        <label for="kotalahir">Kota Lahir</label>
                        <input class="form-control" type="text" value="<?php echo $data['kotalahir'] ?>"
                            name="kotalahir" placeholder="kota">
                    </div>
                    <div class="form-group mb-3">
                        <label for="date" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" value="<?php echo $data['tanggallahir'] ?>" name="date"
                            placeholder="kota">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"><?php echo $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input class="form-control" type="text" value="<?php echo $data['kota'] ?>" name="kota"
                            placeholder="kota">
                    </div>
                    <div class="form-group mb-3">
                        <label for="file" class="form-label">Upload File</label>
                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" value="Upload Image" name="simpan" class="btn btn-primary mb-3">Edit
                            Data</button>
                    </div>
                </form>
            </td>
            <td rowspan='5' class='mx-3 align-top'>
                <p class='p-3 pt-0'>Foto saat ini</p>
                <img class='p-3' height='300px' src="<?php echo $data['foto'] ?>" alt="">
            </td>
        </table>
    </div>
</body>

</html>

<?php
    include "connection.php";

    if(isset($_POST['simpan']))
    {
        $file = basename($_FILES["fileToUpload"]["name"]);
        if (basename($_FILES["fileToUpload"]["name"]) != "") {
            $oldfoto = $data['foto'];
            include "upload.php";
            if ($uploadOk == 1) {
                if ($oldfoto != "default.png") {
                    unlink($data['foto']);
                }
            mysqli_query($koneksi, "UPDATE person_023 SET 
                foto='$target_file'
            WHERE idperson='$id'
            ") or die(mysqli_error($koneksi));
            echo "<h2>Keupdate fotonya $id</h2>";
            }
        }
        else {echo "<h2>Gada gambar</h2>";}

        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $kotalahir = $_POST['kotalahir'];
        $tanggal = $_POST['date'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];

        mysqli_query($koneksi, "UPDATE person_023 SET 
                nama='$nama',gender='$gender',kotalahir='$kotalahir',tanggallahir='$tanggal',alamat='$alamat',kota='$kota'
            WHERE idperson='$id'
            ") or die(mysqli_error($koneksi));
        
        // echo "<div><h5> Data sedang diupdate </h5></div>";
        // <meta http-equiv="refresh" content="0;URL='http://thetudors.example.com/'" />
        $url = "index.php";
        echo "<meta http-equiv='refresh'content='0;url=$url'/>";
    }

?>