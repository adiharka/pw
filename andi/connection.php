<?php 
    $koneksi = mysqli_connect("localhost","root","","person_063");

    if(mysqli_connect_errno())
    {
        echo "Koneksi Gagal" . mysqli_connect_error();
    }
?>