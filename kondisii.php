<?php
$nim = "102022300248"; 
$nama = "fauziah adinda"; 

$username = "halo";
$pass = "1234";

if (($username == "halo") && ($pass == "1234")) {
    echo "Username dan password sesuai.<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama;
} else {
    echo "Username atau password ada yang tidak sesuai.";
}
?>
