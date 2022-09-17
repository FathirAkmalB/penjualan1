<?php

include 'koneksi.php';



if(isset($_POST['save'])){
    $id_pelanggan = $_POST ['id_pelanggan'];
    $nama_pelanggan = $_POST ['nama_pelanggan'];
    $alamat = $_POST ['alamat'];
    $telpon = $_POST ['telpon'];
    $email = $_POST ['email'];

    $sql= "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telpon, email) VALUES ('$id_pelanggan','$nama_pelanggan','$alamat','$telpon','$email')";
    $query = mysqli_query($connect, $sql);


    if($query){
        header('Location: interfaceuser.php');
    }
    else{
        header('Location: save.php?status=gagal');
    }
}


?>