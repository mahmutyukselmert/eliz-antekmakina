<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antek Makina - Mühendislik ve Makina Sanayi</title>
    <?php include 'include/head.html'; ?>

    <style>

    </style>

</head>

<body class="sub-page linear-gradient-parlement">
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main">

        <section class="page-banner">
            <div class="background-wrapper">
                <img src="./assets/images/proje-detay-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-11 col-11">
                            <h1>NERELERDE ÇALIŞIYORUZ?</h1>
                            <p class="subtitle">Türkiye’de tasarlıyoruz, dünyaya kuruyoruz.</p>
                            <div class="row col-lg-6">
                                <p class="contact-us-banner-paragraph">
                                    Antek Makina, mühendisliğini, üretim gücünü ve saha deneyimini global ölçekte taşımaya devam etmektedir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section mx-0 px-0">
            <div class="sidebar">
                <strong class="sidebar-title">LOCATIONS</strong>
                <ul id="menu-list"></ul>
            </div>
            <div id="chartdiv"></div>
        </section>

        <?php include 'include/carousel-project-section.php'; ?>

        <section class="home-contact-us bg-white">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-12">

                        <div class="row col-lg-12">
                            <div class="col-12 col-lg-3 mb-5">
                                <div style="height: 10rem;"></div>
                            </div>
                            <div class="col-12 col-lg-9 mb-5 right-image-area">
                                <img src="./assets/images/contact-us-with-me-2.webp" alt="Bizimle İletişime Geçin" width="850" height="560" class="right-image">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="contact-info-card h-30rem">
                                <h2>BİZİMLE İLETİŞİME GEÇİN</h2>
                                <p class="subheading">Sorunuz mu var? İletişime geçin.</p>
                                <div class="col-lg-8 col-12">
                                    <p>Küresel mühendislik, inşaat ve proje yönetimi uzmanlığımızı ticari avantajınıza nasıl dönüştürebileceğinizi öğrenin.</p>
                                </div>
                                <a href="iletisim.php" class="btn btn-outline-parlement text-decoration-none text-parlement rounded-0 px-4 mt-4">
                                    <span>BİZİMLE İLETİŞİME GEÇİN</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="bi bi-arrow-right-short">
                                        <path d="M571.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-144-144c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L521.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l505.4 0-116.7 116.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l144-144z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

    <script src="https://cdn.amcharts.com/lib/5/geodata/lang/TR.js"></script>
    
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/turkeyLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="./assets/js/map.js"></script>

    <script>
        
    </script>

</body>

</html>