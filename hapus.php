<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM data_jadwal WHERE id='$id'";
    $query = mysqli_query($connect,$sql);

    if ($query) {
        header('Location: jadwal.php');
    }else{
        header('Location: hapus.php?status=gagal'); 
    }
?>