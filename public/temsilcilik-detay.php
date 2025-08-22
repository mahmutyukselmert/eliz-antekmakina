<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antek Makina - Mühendislik ve Makina Sanayi</title>
    <?php include 'include/head.html'; ?>

    <!-- Swiper CSS - Sadece Proje Detay -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="sub-page ">
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main bg-parlement-gradient-left-to-right">

        <section class="page-banner">
            <div class="background-wrapper">
                <img src="./assets/images/proje-detay-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-11 col-11">
                            <h1>
                                <?php
                                if (isset($_GET['t']) && $_GET['t'] == 'ishigaki') {
                                    echo "ISHIGAKI";
                                } elseif (isset($_GET['t']) && $_GET['t'] == 'thor') {
                                    echo "THOR";
                                } else {
                                    echo "PROJE DETAY";
                                }
                                ?>
                            </h1>
                            <p class="subtitle">Altın Madeni Kırma-Eleme Tesisi</p>
                            <div class="row col-lg-12">
                                <p class="contact-us-banner-paragraph">KARAGANDA BÖLGESİ, KAZAKİSTAN.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-parlement-gradient-left-to-right py-5">
            <div class="container">

                <div class="row mb-4">
                    <div class="col-lg-11">
                        <p>Thor Global has been providing conveying equipment for mineral production for over 30 years.</p>
                        <p>Thor Global understands the fast paced requirements of handling coal. Larger products with high capacities are ideal for this application. Hot-Dip galvanizing has also proven to be a key asset for coal applications.</p>
                    </div>
                </div>

                <div class="row col-lg-11">
                    <div class="col-lg-4">
                        <div class="card representation-product-card">
                            <img src="./assets/images/about-us-image-2.webp" alt="">
                            <div class="card-body">
                                <a href="temsilcilik-urun-detay.php" class="stretched-link">
                                    <h3 class="card-title">
                                        THORLOPRO™ Low Profile Telescopic Portable Radial Conveyor
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card representation-product-card">
                            <img src="./assets/images/about-us-image-2.webp" alt="">
                            <div class="card-body">
                                <a href="temsilcilik-urun-detay.php" class="stretched-link">
                                    <h3 class="card-title">
                                        THORLOPRO™ Low Profile Telescopic Portable Radial Conveyor 2
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card representation-product-card">
                            <img src="./assets/images/about-us-image-2.webp" alt="">
                            <div class="card-body">
                                <a href="temsilcilik-urun-detay.php" class="stretched-link">
                                    <h3 class="card-title">
                                        THORLOPRO™ Low Profile Telescopic Portable Radial Conveyor 2
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include 'include/footer.html'; ?>

    <!-- Swiper JS - Sadece Proje Detay -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            speed: 500,
            effect: 'coverflow',
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</body>

</html>