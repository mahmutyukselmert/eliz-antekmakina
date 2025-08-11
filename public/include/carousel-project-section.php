<section class="home-projects-section" id="home-projects-section">

    <?php
    if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
        echo '
            <div class="row align-items-center justify-content-center scroll-reveal-right mb-5">
                <div class="col-12 col-lg-8">
                    <h2 class="text-center text-primary fw-semibold fs-36 mb-5">
                        İşe yarayan tek sistem, iyi çalışan sistemdir.
                    </h2>
                    <p class="fs-21 text-parlement text-center fw-medium">Her projeye mühendislik zekâsı, kalite disiplini ve sahada test edilmiş çözümlerle yaklaşırız. İşinize değer katan, gerçekten çalışan sistemler için buradayız.</p>
                </div>
            </div>
            ';
    }

    $custom_carousel_projecs = [
        [
            'title' => 'Proje 1',
            'subtitle' => 'Gold Africa Mining Limited',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
            'image' => './assets/images/project-1.webp',
            'link' => 'proje-detay.php'
        ],
        [
            'title' => 'Proje 2',
            'subtitle' => 'Gold Africa Mining Limited',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
            'image' => './assets/images/proje-2.webp',
            'link' => 'proje-detay.php'
        ],
        [
            'title' => 'Proje 3',
            'subtitle' => 'Gold Africa Mining Limited',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
            'image' => 'https://placehold.co/350x250/28a745/ffffff?text=Proje+Gorseli+3',
            'link' => 'proje-detay.php'
        ],
        [
            'title' => 'Proje 4',
            'subtitle' => 'Gold Africa Mining Limited',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
            'image' => 'https://placehold.co/350x250/ffc107/343a40?text=Proje+Gorseli+4',
            'link' => 'proje-detay.php'
        ],
        [
            'title' => 'Proje 5',
            'subtitle' => 'Gold Africa Mining Limited',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
            'image' => 'https://placehold.co/350x250/17a2b8/ffffff?text=Proje+Gorseli+5',
            'link' => 'proje-detay.php'
        ]
    ];
    ?>

    <div class="custom-carousel-container">

        <div class="custom-carousel-viewport">
            <div class="custom-carousel-track" id="carouselTrack">

                <?php
                foreach ($custom_carousel_projecs as $project) {
                ?>
                <!-- Proje Kartıları -->
                <div class="custom-carousel-item">

                    <div class="custom-carousel-card-wrapper">
                        <div class="card card-slide-project">
                            <div class="card-right-image">
                                <img src="<?php echo $project['image']; ?>" alt="Proje Görseli 1">
                            </div>
                            <div class="card-left-content">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $project['title']; ?></h4>
                                    <h5 class="card-subtitle">
                                        <?php echo $project['subtitle']; ?>
                                    </h5>
                                    <div class="card-text">
                                        <p>
                                            <?php echo $project['description']; ?>
                                        </p>
                                    </div>
                                </div>
                                <a href="proje-detay.php" class="btn btn-outline-parlement rounded-0 px-3">
                                    <span>
                                        PROJE DETAY
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="bi bi-arrow-right-short">
                                        <path d="M571.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-144-144c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L521.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l505.4 0-116.7 116.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l144-144z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="carousel-controls">
            <!-- Sol Ok Butonu -->
            <button class="carousel-control-btn carousel-control-prev-btn" id="prevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
            </button>

            <!-- Sağ Ok Butonu -->
            <button class="carousel-control-btn carousel-control-next-btn" id="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793l-2.147-2.146a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
            </button>
        </div>
    </div>

</section>