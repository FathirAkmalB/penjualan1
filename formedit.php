<?php

include 'koneksi.php' ;


$id_pelanggan = $_GET['idpel'];
$sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$query= mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">

</head>
<body>
    <a href="interfaceuser.php"> <= Kembali</a>
    <form action="edit.php" method="post">
        <h3>Edit Data Pelanggan</h3>
        <table>
        <tr>
            <td>Id Pelanggan</td>
            <td>:</td>
            <td><Label> <input value="<?php echo $pel['id_pelanggan']?>" required="required" type="hidden " name="id_pelanggan"></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><Label><input value="<?php echo $pel['nama_pelanggan']?>" required="required" type="text" name="nama_pelanggan"></td>
                </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><Label><textarea required="required" name="alamat"cols="30" rows="5"><?php echo $pel['alamat']?></textarea></textarea></td>
        </tr>
        <tr>
            <td>No.Telephone</td>
            <td>:</td>
            <td><Label><input value="<?php echo $pel['telpon']?>" required="required" type="number" name="telpon"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><Label><input value="<?php echo $pel['email']?>" required="required" type="email" name="email"></td>
        </tr>
    </table>
    <input type="submit" name="edit" value="edit">
</form>
</body>
</html>