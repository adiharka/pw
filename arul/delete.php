<?php
    include "connection.php";
    $id = $_GET['idperson'];
    $get = mysqli_query($koneksi, "SELECT * FROM person_037 WHERE idperson=$id");
    $data = mysqli_fetch_array($get);
    mysqli_query($koneksi, "UPDATE person_037 SET 
                isactive='0'
        WHERE idperson='$id'
    ") or die(mysqli_error($koneksi));

    $url = "index.php";
    echo "<meta http-equiv='refresh'content='0;url=$url'/>";

?>