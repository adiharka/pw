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
    <title>DETAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav style='height:50px' class="navbar navbar-expand-lg navbar-light bg-dark">
<a class='mx-3' href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
<h5 class='mx-3 text-light' style='margin:0px'>Kiki_023</h5>
</nav>
    <div class="m-3">
        <h2>Detail Person</h2>
        <table class='mt-3'>
            <tr>
                <th width='120px'>ID Person</th>
                <td>:</td>
                <td><?php echo $data['idperson'] ?></td>
                <td rowspan='7'><img height='350px' src="<?php echo $data['foto'] ?>" alt=""></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?php echo $data['nama'] ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td><?php if ($data['gender']==1) {echo "Laki-laki";}
                    else {echo "Perempuan";} ?></td>
            </tr>
            <tr>
                <th>Kota Lahir</th>
                <td>:</td>
                <td><?php echo $data['kotalahir'] ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?php echo date("d M Y", strtotime($data['tanggallahir'])) ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?php echo $data['alamat'] ?></td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>:</td>
                <td><?php echo $data['kota'] ?></td>
            </tr>

        </table>
    </div>
</body>

</html>