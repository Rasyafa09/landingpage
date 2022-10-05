<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nama_guru = $_POST['nama_guru'];
        $jadwal = $_POST['jadwal'];
        $tempat_pertemuan = $_POST['tempat_pertemuan'];

        $sql = "UPDATE data_jadwal SET nama='$nama' , nama_guru='$nama_guru' , kelas='$kelas' , jadwal='$jadwal' , tempat_pertemuan='$tempat_pertemuan' WHERE id = '$id'";
        $query = mysqli_query($connect,$sql);
        if($query){
            header('location: jadwal.php');
        }else{
            header('location : edit.php?status=gagal');
        }
    }
?>