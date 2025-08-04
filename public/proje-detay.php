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

    <main class="sub-page-main bg-parlement-gradient">

        <section class="page-banner">
            <div class="background-wrapper">
                <img src="./assets/images/proje-detay-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-11 col-11">
                            <h1>MADENCİLİK</h1>
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
                    <div class="col-lg-3">
                        <div class="project-detail-left-card">
                            <ul class="project-detail-list">
                                <li><strong>Proje</strong> Altın Madeni Kırma-Eleme Tesisi</li>
                                <li><strong>Müşteri</strong> Lorem Ipsum</li>
                                <li><strong>Lokasyon</strong> Karaganda Bölgesi, Kazakistan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
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

        <section class="contact-us-we">
            <div class="container">

                <div class="col-12 col-lg-12">
                    <div class="contact-info-card">
                        <h2>BİZİMLE İLETİŞİME GEÇİN</h2>
                        <p class="subheading">Sorunuz mu var? İletişime geçin.</p>
                        <div class="col-lg-6 col-12 text-center">
                            <p>Küresel mühendislik, inşaat ve proje yönetimi uzmanlığımızı ticari avantajınıza nasıl dönüştürebileceğinizi öğrenin.</p>
                        </div>
                        <a href="iletisim.php" class="btn btn-outline-white text-decoration-none rounded-0 px-4 mt-4">
                            <span>BİZİMLE İLETİŞİME GEÇİN</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="bi bi-arrow-right-short">
                                <path d="M571.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-144-144c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L521.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l505.4 0-116.7 116.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l144-144z"></path>
                            </svg>
                        </a>
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