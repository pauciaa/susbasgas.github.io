<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP 11</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php
  
    echo "<strong>NIM: 102022300248</strong><br>";
    echo "<strong>Nama: Fauziah Adinda</strong><br><br>";

   
    $mahasiswa = ['Mahasiswa 1', 'Mahasiswa 2', 'Mahasiswa 3', 'Mahasiswa 4', 'Mahasiswa 5'];

    
    foreach ($mahasiswa as $row) {
        echo $row . "<br>";
    }
    ?>
</body>
</html>
