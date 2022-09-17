<?php
include 'koneksi.php';

// if (isset($_GET['idpel'])){
//     header('location: tampilpelanggan.php');
// }

$id_pelanggan = $_GET['idpel'];

$sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$query = mysqli_query($connect, $sql);

if(isset($_GET['idpel'])) {
    header ('Location: interfaceuser.php');
}
else {
    header('Location: hapus.php?status=gagal');
}

?>