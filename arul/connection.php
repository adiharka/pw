<?php 
    $koneksi = mysqli_connect("localhost","root","","person_037");

    if(mysqli_connect_errno())
    {
        echo "Koneksi Gagal" . mysqli_connect_error();
    }
?>