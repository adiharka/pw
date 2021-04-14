<?php
    include "connection.php";
    $id = $_GET['idperson'];
    $get = mysqli_query($koneksi, "SELECT * FROM person_020 WHERE idperson=$id");
    $data = mysqli_fetch_array($get);
    mysqli_query($koneksi, "UPDATE person_020 SET 
                isactive='1'
        WHERE idperson='$id'
    ") or die(mysqli_error($koneksi));

    $url = "index.php";
    echo "<meta http-equiv='refresh'content='0;url=$url'/>";

?>