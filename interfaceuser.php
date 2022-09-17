<?php
    include 'koneksi.php' ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <h3>Data Pelanggan</h3>
    <h4><a href="user.html">[+] Tambah Data Baru</a></h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Id pelanggan</th>
            <th>Nama pelanggan</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM pelanggan";
        $query = mysqli_query ($connect,$sql);
        $no= 1;
        while ($pel = mysqli_fetch_array($query)){
        echo " 
            <tr>
            <td>$no</td>
            <td>$pel[id_pelanggan]</td>
            <td>$pel[nama_pelanggan]</td>
            <td>$pel[alamat]</td>
            <td>$pel[telpon]</td>
            <td>$pel[email]</td>
            <td>
                <a href='formedit.php?idpel=".$pel['id_pelanggan']."'>Edit</a>
                <a href='hapus.php?idpel=".$pel['id_pelanggan']."' onClick=\" return confirm('apakah anda yakin ingin menghapus data ini?');\">Hapus</a>
            </td>
            </tr>
        ";
        $no++;
            }
        ?>
    </table>
</body>
</html>