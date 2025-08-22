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

<body class="sub-page linear-gradient-parlement">
    <?php include 'include/header.html'; ?>

    <?php 
    if (isset($_GET['t']) && $_GET['t'] == 'ishigaki') {
        $t = 'ishigaki';
    } elseif (isset($_GET['t']) && $_GET['t'] == 'thor') {
        $t = 'thor';
    } else {
        $t = 'thor';
    }
    ?>

    <main class="sub-page-main bg-parlement-gradient">

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

        <section class="proje-detail-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">

                        <div id="produtCarouselSlider" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active"> <!-- İlk slayt active classı almalı -->
                                    <img src="./assets/images/proje-detay-1.webp" class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/proje-2.webp" class="img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/proje-3.webp" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="carousel-controls">
                                <button class="carousel-control-prev" type="button" data-bs-target="#produtCarouselSlider"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#produtCarouselSlider"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="project-detail-left-card representation-list mt-5">
                            <h3 class="text-primary mb-3">
                                <?php 
                                if (isset($_GET['t']) && $_GET['t'] == 'ishigaki') {
                                    echo "ISHIGAKI";
                                } elseif (isset($_GET['t']) && $_GET['t'] == 'thor') {
                                    echo "THOR";
                                } else {
                                    echo "PROJE LİSTESİ";
                                }
                                ?>
                            </h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="temsilcilik-proje-detay.php?t=<?=$t?>">Altın Madeni Kırma-Eleme Tesisi</a>
                                </li>
                                <li>
                                    <a href="temsilcilik-proje-detay.php?t=<?=$t?>">Altın Madeni Kırma-Eleme Tesisi 2</a>
                                </li>
                                <li>
                                    <a href="temsilcilik-proje-detay.php?t=<?=$t?>">Altın Madeni Kırma-Eleme Tesisi 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="project-detail-right-content">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </h2>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-white py-5">
            <div class="container">

                <div class="row">
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