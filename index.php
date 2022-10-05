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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <div class="home">
        <img src="Image/pexels-cottonbro-4101143.jpg" alt="">
        <div class="hometext">
            Welcome to Taruna Bhakti<br>Website Konsultasi
        </div>
    </div>
    <div class="hero">
        <div class="text">
            <h1>Konsultasi BK</h1>
            <p>Di website ini kalian bisa menanyakan kepada<br> salah satu guru BK di Taruna Bhakti <br>dengan hanya memberi<br> pertanyaan</p>
        </div>
        <img src="Image/Tarunabhaktilogo.png" alt="" width="30%">
    </div>
    <div class="konsultasi">
        <img src="Image/Consulting_Monochromatic.png" alt="" width="30%">
        <div class="konsultext">
        <h1>Halaman Konsultasi</h1>
        <P>Di Halaman Konsultasi ini Kalian bisa menanyakan <br>atau menyampaikan keluhan  kalian alami dan <br>akan di jawab oleh guru BK di <br>SMK Taruna Bhakti </P>
        <div class="btn">
        <form action="konsul.php">
            <input type="submit" value="Buat Jadwal Pertemuan">
        </form>
        <form action="jadwal.php">
            <input type="submit" value="Jadwal Anda">
        </form>
        </div>
        
    </div>
    </div>
    </div>
    <div class="imgscroll">
    <!-- partial:index.partial.html -->
    <div class="slider-container">
        <div class="slider-content">
            <div class="slider-single">
                <img class="slider-single-image" src="image/narkoba.jpg" alt="1" />
                <h1 class="slider-single-title" style="font-weight: bolder;">Hindari Narkotika Cerdaskan Generasi Muda Bangsa </h1>
                <p class="slider-single-title">Hindari Narkotika Cerdaskan Generasi Muda Bangsa Narkoba adalah singkatan dari narkotika, psikotropika dan bahan adiktif lainnya. Menurut UU Narkotika pasal 1 </p>
                <a class="slider-single-likes" href="javascript:void(0);">
                </a>
            </div>
            <div class="slider-single">
                <img class="slider-single-image" src="image/bully.png" alt="1" />
                <h1 class="slider-single-title" style="font-weight: bolder;">Bulying </h1>
                <p class="slider-single-title">Dalam dunia pendidikan tentu saja tidak luput dari berbagai masalah. Masalah yang sering tersorot adalah kasus bullying. Bullying atau yang kerap dikenal sebagai penindasan adalah bentuk perlakuan kejahatan yang dilakukan oleh orang yang lebih kuat atau berkuasa kepada orang lain secara sengaja dengan tujuan untuk menyakiti dan dilakukan secara terus menerus, baik secara fisik maupun verbal.</p>
                <a class="slider-single-likes" href="javascript:void(0);">
                </a>
            </div>
            <div class="slider-single">
                <img class="slider-single-image" src="image/cyberbulling.png" alt="1" />
                <h1 class="slider-single-title" style="font-weight: bolder;">Cyberbullying</h1>
                <p class="slider-single-title">Cyberbullying (perundungan dunia maya) ialah bullying/perundungan dengan menggunakan teknologi digital. Hal ini dapat terjadi di media sosial, platform chatting, platform bermain game, dan ponsel. Adapun menurut Think Before Text, cyberbullying adalah perilaku agresif dan bertujuan yang dilakukan suatu kelompok atau individu</p>
                <a class="slider-single-likes" href="javascript:void(0);">
                </a>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script  src="./script.js"></script>
    </div>
    <div class="about">
        <h1>About Us</h1><br>
        <p>Di Website ini kami menyediakan layanan konseling yang id kelola oleh tim kami, di tim kami sendiri ada 5 orang yang pertama saya Agung raviano dan yang kedua Arya rachman praditya dan yang ketiga Arya darren dan yang keempat ada Khairan Nail F dan yang terakhir ada Rasya Fadil dan di sini kami membuat projek tentang konsultasi ke bimbingan konseling yang ada di sekolah kami yaitu Taruna Bhakti.</p>
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
                        <a href="#"><i class="fab fa-instagram"></i></a>''
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
        </div>
    </footer>
</body>
</html>