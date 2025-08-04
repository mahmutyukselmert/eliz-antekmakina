<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antek Makina - Mühendislik ve Makina Sanayi</title>
    <?php include 'include/head.html'; ?>

    <style type="text/css">
        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center
        }

        #modalImage {
            max-width: 100%;
            max-height: 75vh;
            height: auto;
            width: auto
        }

        .modal-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, .4);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            font-size: 24px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 1060;
            transition: background-color .2s
        }

        .modal-nav-btn:hover {
            background-color: rgba(0, 0, 0, .7)
        }

        #modal-prev-btn {
            left: 15px
        }

        #modal-next-btn {
            right: 15px
        }

        .modal-nav-btn svg {
            width: 30px;
            height: 25px
        }

        .grid-card-section .grid-card-list .grid-card-item.card-image-hover-scale {
            border-radius: 3px;
        }
    </style>
</head>

<body class="sub-page ">
    <?php include 'include/header.html'; ?>
    <main class="sub-page-main bg-parlement-gradient-left-to-right">
        <section class="page-banner short-banner">
            <div class="background-wrapper">
                <img src="./assets/images/nasil-dusunuyoruz-banner.webp" alt="Banner">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-11 col-11">
                            <h1>Kalite Politikası ve Sertifikalar</h1>
                            <div class="row col-lg-8">
                                <div class="row col-lg-12">
                                    <p class="contact-us-banner-paragraph">Biz Antek Makina olarak; akılcı, sahaya uygun, sürdürülebilir ve sonuç odaklı düşünen bir mühendislik firmasıyız. Her projeyi sadece teknik bir iş olarak değil, bir ortaklık olarak görür; o projede hem aklımızı hem emeğimizi ortaya koyarız.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="mb-4">Sahip Olduğumuz Sertifikalar</h2>
            <ul class="list-group list-group-flush mb-5">
                <li class="list-group-item">ISO 9001:2015 – Kalite Yönetim Sistemi</li>
                <li class="list-group-item">ISO 14001:2015 – Çevre Yönetim Sistemi</li>
                <li class="list-group-item">ISO 45001:2018 – İş Sağlığı ve Güvenliği Yönetim Sistemi</li>
            </ul>

            <h2 class="mb-4">Kalite Politikamız</h2>
            <p>Mast Enerji, kaliteyi bir hedef değil, sürdürülebilir başarı için bir süreç olarak görür. Faaliyet gösterdiğimiz her alanda:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Uluslararası standartlara uyumlu hareket etmeyi,</li>
                <li class="list-group-item">Müşteri beklentilerini aşan sonuçlar üretmeyi,</li>
                <li class="list-group-item">Çevreye ve topluma karşı sorumluluklarımızı gözetmeyi,</li>
                <li class="list-group-item">Sürekli gelişim ve iyileştirmeyi bir kurum kültürü olarak benimsemeyi taahhüt ederiz.</li>
            </ul>
        </section>

        <section class="grid-card-area mb-5">
            <div class="container">
                <div class="grid-card-list grid-card-list-6">

                    <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-45001.jpg" data-image-title="ISO 45001">
                        <div class="overlay"></div>
                        <img src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-45001.jpg" class="card-img" alt="ISO 45001">
                        <div class="card-img-overlay bottom-0">
                            <h5 class="card-title text-white">ISO 45001</h5>
                        </div>
                    </div>

                    <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-14001.jpg" data-image-title="ISO 14001">
                        <div class="overlay"></div>
                        <img src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-14001.jpg" alt="ISO 14001" class="card-img">
                        <div class="card-img-overlay bottom-0">
                            <h5 class="card-title text-white">ISO 14001</h5>
                        </div>
                    </div>

                    <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-9001.jpg" data-image-title="ISO 9001">
                        <div class="overlay"></div>
                        <img src="https://www.mastenerji.com.tr/tema/genel/uploads/belgeler/MAST-ENERJ%EF%BF%BD-ISO-9001.jpg" class="card-img" alt="ISO 9001">
                        <div class="card-img-overlay bottom-0">
                            <h5 class="card-title text-white">ISO 9001</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include 'include/footer.html'; ?>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel"></h5>
                    <button type="button" class="btn-close btn-close-red" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body text-center position-relative">
                    <button class="modal-nav-btn" id="modal-prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <img src="" class="img-fluid rounded" id="modalImage" alt="Büyük Görüntü">
                    <button class="modal-nav-btn" id="modal-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        /*Modal slider js*/
        document.addEventListener("DOMContentLoaded", function() {
            let e = document.getElementById("imageModal"),
                t = [],
                n = 0;
            document.querySelectorAll(".grid-card-item").forEach((e, n) => {
                t.push({
                    src: e.getAttribute("data-image-src"),
                    title: e.getAttribute("data-image-title")
                })
            });
            let l = n => {
                let l = t[n],
                    a = e.querySelector("#modalImage"),
                    d = e.querySelector("#imageModalLabel");
                a && (a.src = l.src, a.alt = l.title), d && (d.textContent = l.title)
            };
            e && e.addEventListener("show.bs.modal", function(e) {
                let a = e.relatedTarget,
                    d = a.getAttribute("data-image-src");
                l(n = t.findIndex(e => e.src === d))
            }), document.getElementById("modal-next-btn").addEventListener("click", function() {
                l(n = (n + 1) % t.length)
            }), document.getElementById("modal-prev-btn").addEventListener("click", function() {
                l(n = (n - 1 + t.length) % t.length)
            })
        });
    </script>

</body>

</html>