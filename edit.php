<?php 
    include "koneksi.php";

    if(isset($_POST['edit'])){
        $id_pelanggan = $_POST['id_pelanggan'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['telpon'];
        $email = $_POST['email'];

        $sql = "UPDATE pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', telpon = '$telpon', email = '$email' WHERE pelanggan.id_pelanggan = '$id_pelanggan'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: interfaceuser.php');
        }
        else{
            header('Location: save.php?status=gagal');
        }
    }
?>