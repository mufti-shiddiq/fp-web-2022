<?php
$thisPage = "about";
?>

<!doctype html>
<html lang="en">

<head>
    <?php include "layouts/head.php" ?>
    <title>Space Roastery</title>

    <style>
        .wrappertext {
            height: 100%;
        }

        .wrappertext p {
            line-height: 2;
            text-align: justify;
            margin: 0;
        }

        .aboutspace {
            float: left;
            height: 400px;
            shape-outside: url(.../img/about-top-image.jpg);
        }

        .img-hover-zoom--colorize {

            overflow: hidden;
        }

        .img-hover-zoom--colorize img {
            transition: transform .5s, filter 1s ease-in-out;
            filter: grayscale(100%);
        }


        .img-hover-zoom--colorize:hover img {
            filter: grayscale(0);
            transform: scale(1.1);
        }

        .iframe-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
    <?php include "layouts/navbar.php" ?>
    <div class="py-1"></div>

    <!-- Content -->
    <div class="container wrappertext mt-2 pt-5">
        <div class="img-hover-zoom--colorize">
            <img src="assets/img/slide-5.jpg" class="img-fluid" alt="">
        </div>
        <div class="heading-wrap text-center pt-5 pb-3">
            <h2 class="text-uppercase">"we are not a coffee addict. just a little over attached to it"</h2>
        </div>
        <div class="row p-2">
            <div class="col-md">

                <img src="assets/img/about-top-image.jpg" class="img aboutspace p-3" alt="gambar">
                <p class="mb-2"> Kebiasaan kami meminum kopi sudah dimulai sejak cukup lama sejak saat kami masih
                    menjadi pelajar di luar negeri. Setiap pagi sebelum berangkat sekolah,
                    kami selalu menyempatkan diri untuk mengunjungi coffee shop di dekat apartemen dan memesan
                    Americano. Jujur saja, pada saat itu kami lebih tertarik dengan arom dari kopi yang diseduh dan bau
                    dari coffee shop,
                    awalnya kami bahkan tidak suka dengan rasa kopi hitam yang kami pesan, tetapi aroma dan efek yang
                    ditimbulkan oleh kopi-lah yang membuat kami selalu datang kembali. </p>
                </p>
                <p> Singkat cerita, pada waktu kami kembali lagi tinggal di Indonesia, kami menemukan kejanggalan, di
                    negara yang merupakan penghasil salah satu penghasil kopi terbesar di dunia, kami kesusahan untuk
                    mendapatkan kopi berkualitas yang selalu kami konsumsi pada saat kami masih di luar negeri.
                    Kami sudah mencoba beberapa alternatif, kopi dari supermarket? Kebanyakan sudah tidak fresh.
                    Starbucks? Terlalu hambar dan mahal. Roastery lokal? Hasilnya tidak konsisten dan kopinya susah
                    didapatkan, yang kami dapatkan justru customer service yang buruk. Sampai ada di satu titik dimana
                    kami akhirnya memutuskan untuk memulai roasting kopi sendiri,
                    dengan berbekal pengalaman ngopi, deep research, dan banyak membaca, kami berhasil. Selang beberapa
                    bulan, ternyata banyak yang menyukai kopi kami, dan beberapa dari mereka bahkan menanyakan apakah
                    kami menjualnya. Dari situlah kami mulai meng-komersialkan kopi kami dengan nama Space Roastery.
                </p>
            </div>
        </div>
        <div class="heading-wrap text-center mt-5 mb-5">
            <h2 class="text-uppercase">"kami punya komitmen dimana semua kopi yang kami produksi adalah kopi yang fresh
                dari biji yang berkualitas"</h2>
            <div class="iframe-container">
                <iframe class="p-2" width="560" height="315" src="https://www.youtube.com/embed/_-_2CA4Ro1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <?php include "layouts/footer.php" ?>
    <?php include "layouts/footer-script.php" ?>

</body>

</html>