<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nama_guru = $_POST['nama_guru'];
        $jadwal = $_POST['jadwal'];
        $tempat_pertemuan = $_POST['tempat_pertemuan'];

        $sql = "INSERT INTO data_jadwal (id, nama, kelas, nama_guru,  jadwal, tempat_pertemuan) VALUES ('$id', '$nama', '$kelas', '$nama_guru' , '$jadwal' , '$tempat_pertemuan')";
        $query = mysqli_query($connect,$sql);

        if($query){
            header('location: jadwal.php');
        }else{
            header('location : simpan.php?status=gagal');
        }
    }
?>