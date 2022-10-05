<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="whitenav">
            <img src="Image/Tarunabhaktilogo.png" alt="">
        </div>
        <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="konsul.php"><li>Konsultasi</li></a>
            <a href="#"><li>About</li></a>
            <a href="#"><li>Contact</li></a>
        </ul>
    </div>
    
    <div class="konsultj">
        <table cellspacing="0" width="90%" style="margin-left: 5%;">
            <tr>
                <th>id</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Guru</th>
                <th>Jadwal</th>
                <th>Tempat Pertemuan</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM data_jadwal";
            $query = mysqli_query ($connect,$sql);
            while($data= mysqli_fetch_array ($query)){
                echo"
                <tr>
                    <td>$data[id]</td>
                    <td>$data[nama]</td>
                    <td>$data[kelas]</td>
                    <td>$data[nama_guru]</td>
                    <td>$data[jadwal]</td>
                    <td>$data[tempat_pertemuan]</td>
                    <td>
                        <a href='formedit.php?id=".$data['id']."'>Edit</a>
                    </td>
                </tr>
                ";
                }
            ?>
        </table>
    </div>

</body>
</html>