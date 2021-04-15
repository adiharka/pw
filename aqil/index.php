<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" </head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $('.popover-dismiss').popover({
            trigger: 'focus'
        })
    </script>

<body>
    <h1 class="m-3">Halaman Utama</h1>
    <a class='' href="add.php"><button type="button" class="btn btn-outline-primary m-3">+ Tambah data</button></a>
    <div class="card-header bg-dark border-primary text-light">
        Person
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover border-primary">
            <tr class='bg-light'>
                <th width='15px'>#</th>
                <th width='15px'>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th width='190px'>Action</th>
            </tr>
            <?php
                    include "connection.php";
                    $number = 1;
                    $empty = 0;
                    $show = mysqli_query($koneksi, "SELECT * FROM person_066");?>
            <?php while($data=mysqli_fetch_array($show)){
                     if ($data['isactive']==1)
                    {
                    ?>
            <tr>
                <td> <?php echo $number++; ?> </td>
                <td> <?php echo $data['idperson'] ?> </td>
                <td> <?php echo $data['nama'] ?> </td>
                <td> <?php echo $data['alamat'] ?> </td>
                <td>
                    <button onclick="location.href='detail.php?idperson=<?php echo $data["idperson"] ?>'"
                        class="btn btn-sm btn-info">Detail</button>
                    <button onclick="location.href='edit.php?idperson=<?php echo $data["idperson"] ?>'"
                        class="btn btn-sm btn-warning">Edit</button>
                    <button onclick="location.href='delete.php?idperson=<?php echo $data["idperson"] ?>'"
                        class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            <?php } else $empty=1;} ?>
        </table>
    </div>
    <div class="card-header bg-dark border-danger text-light">
        Terhapus
    </div>
    <div class="card-body">
        <table class="table table-bordered bg-white text-dark table-hover border-danger">
            <tr class='bg-light'>
                <th width='15px'>#</th>
                <th width='15px'>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th width='190px'>Action</th>
            </tr>
            <?php
                    include "connection.php";
                    $number = 1;
                    $empty = 0;
                    $show = mysqli_query($koneksi, "SELECT * FROM person_066");
                    while($data=mysqli_fetch_array($show)){
                     if ($data['isactive']==0)
                    {
                    ?>
            <tr>
                <td> <?php echo $number++; ?> </td>
                <td> <?php echo $data['idperson'] ?> </td>
                <td> <?php echo $data['nama'] ?> </td>
                <td> <?php echo $data['alamat'] ?> </td>
                <td>
                    <button onclick="location.href='active.php?idperson=<?php echo $data["idperson"] ?>'"
                        class="btn btn-sm btn-success">Active</button>
                </td>
            </tr>
            <?php }} ?>
        </table>
    </div>
    <p class='text-center'>Aqil Akmaludin Makarim - 081911633066</p>
</body>

</html>