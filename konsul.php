<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
    <form method="post" action="simpan.php">
        <h3>Buat Jadwal Pertemuan</h3>
        <p><label>Nama : <input type="text" name="nama" required="required"></label></p>
        <p><label>Kelas : <select name="kelas" id="kelas">
            <optgroup label="PPLG">
            <option value="XI PPLG 1">XI PPLG 1</option>
            <option value="XI PPLG 2">XI PPLG 2</option>;
            </optgroup>
            <optgroup label="TJKT">
            <option value="XI TJKT 1">XI TJKT 1</option>
            <option value="XI TJKT 2">XI TJKT 2</option>
            </optgroup>
            <optgroup label="MM">
            <option value="XI MM 1">XI MM 1</option>
            <option value="XI MM 2">XI MM 2</option>
            </optgroup>
            <optgroup label="BRC">
            <option value="XI BRC 1">XI BRC 1</option>
            <option value="XI BRC 2">XI BRC 2</option>
            </optgroup>
        </select></label></p>
        <p><label>Guru : <select name="nama_guru" id="nama_guru">
            <option value="Pak Gunawan">Pak Gunawan</option>
            <option value="Bu Heni">Bu Heni</option>
            <option value="Pak Ricky">Pak Ricky</option>
            <option value="Bu Kasandra">Bu Kasandra</option>
        </select></label></p>
        <p><label>Jadwal : <input type="date" name="jadwal" required="required"></label></p>
        <p><label>Tempat Pertemuan : <input type="text" name="tempat_pertemuan"></label></p>
        <div class="btn-simpan">
            <input type="submit" name="simpan"value="simpan" >
        </div>
    </form>
        
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our service</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">return</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
        </div>
    </footer>
</body>
</html>