<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antek Makina - Mühendislik ve Makina Sanayi</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main bg-parlement-gradient-left-to-right">

        <section class="page-banner">
            <div class="background-wrapper">
                <img src="./assets/images/hizmet-detay-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-11 col-11">
                            <h1>TEMSİLCİLİKLERİMİZ</h1>
                            <div class="row col-lg-5">
                                <p class="subtitle">Antek Makina ile Güvenli ve Verimli Madencilik Altyapısı</p>
                                <div class="col-lg-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="what-are-we-doing-section pb-5">
            <div class="container pb-5">

                <div class="row">
                    <div class="col-lg-11 service-detail-content-area px-lg-5 pb-lg-5">
                        <?php if (isset($_GET['t']) && $_GET['t'] == 'ishigaki') : ?>
                            <h2 class="page-title-1 mb-4 scroll-reveal-left">ISHIGAKI</h2>
                            <div>
                                <p>ISHIGAKI Company Ltd., 1958 yılında Japonya’da kurulan bir firma olup kapsamlı ve yenilikçi katı-sıvı ayırma ekipmanları üreten ve sürekli geliştiren Japonya merkezli bir şirkettir.</p>
                                <p>ISHIGAKI filtre presleri, madencilik sektöründe olduğu gibi çeşitli endüstriyel uygulamalarda ve su & atık su arıtma işlemlerinde de kullanılmaktadır. Madencilik sektörü için ISHIGAKI tarafından üretilen ve filtre pres ekipmanları arasında ikon olarak değerlendirilen LASTA Filtre Pres tamamen otomatik bir pres filtredir. Bu pres filtrenin benzersiz özellikleri, dünya madencilik endüstrisinde son derece büyük bir itibara sahiptir.</p>
                                <p>ISHIGAKI ekipmanlarının tasarımı ve geliştirilmesi; verimlilik, üretkenlik ve teknolojik yenilikçilik unsurlarına dayanırken, aynı zamanda çevresel hususlar da dikkate alınmaktadır.</p>
                                <p>ISHIGAKI ekipmanları müşterilerin ihtiyaç duyduğu spesifik proses ihtiyaçlarını karşılarken gerektiğinde uygulamaya özel çözümler de sunar.</p>
                                <p>ISHIGAKI; tam otomatik pres filtesi, vidalı presi, kum filtresi (polish filter/sand filter) ve diğer ürünleri ile dünya çapında 5.000'den fazla tesiste ekipmanı bulunan en yüksek verimli ve kaliteli ekipman tedarikçilerinden birisidir. </p>
                                <p>ISHIGAKI; müşterilerini 50'den fazla ülkede 1000’e yakın personeliyle yan kuruluşlar, ofisler ve temsilciler aracılığıyla desteklemektedir.</p>
                                <p>Web Sitesi:</p>
                                <p>http://www.ishigaki.co.jp/english/ </p>
                            </div>
                        <?php elseif ( isset($_GET['t']) && $_GET['t'] == 'thor' ) : ?>
                            <h2 class="page-title-1 mb-4 scroll-reveal-left">THOR</h2>
                            <div>
                                <p>THOR GLOBAL PRESENTS MANY OPPORTUNITIES FOR THE MINING INDUSTRY WITH CUSTOM SOLUTIONS AND VERSATILE CONFIGURATIONS FOR HEAP LEACHING. WHEN STORING BULK MATERIAL, TELESCOPIC TECHNOLOGY CAN MAXIMIZE ANY GIVEN FOOTPRINT. THOR GLOBAL USES 60,000 PSI YIELD STRENGTH STEEL VERSUS THE INDUSTRY STANDARD OF 45,000 PSI YIELD STRENGTH FOR ALL HSS (HOLLOW STRUCTURAL SECTION) TUBING.</p>

                                <p>Thor Global has been providing conveying equipment for mineral production for over 30 years.</p>

                                <p>Thor Global understands the fast paced requirements of handling coal. Larger products with high capacities are ideal for this application. Hot-Dip galvanizing has also proven to be a key asset for coal applications.</p>

                                <p>Thor Global also takes seismic standards into consideration when designing for regions that are prone to earthquakes. </p>
                            </div>
                        <?php endif ?>
                    </div>
                </div>

            </div>
        </section>

        <div class="py-5 bg-parlement">
            <div class="container py-3">
            </div>
        </div>

        <?php
        require_once 'include/section-products.php';
        getProjects();
        ?>

    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>