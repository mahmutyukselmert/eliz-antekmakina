<?php
function getProjects($where = 'home') {
?>
<section class="about-three-section bg-white py-5">
    <div class="container">
        <div class="row">
            

            <div class="row">
            <?php
            if ($where === 'neler-yapiyoruz') { 
                ?>
                <h2 class="text-primary fs-5 fw-bold mb-3">PROJELERİMİZ</h2>
                <div class="col-lg-5 page-paragraph-1">
                    <strong class="fs-32 text-parlement fw-semibold mb-5">Çalışma şeklimiz işe yarıyor</strong>
                    <p class="mt-3 mb-5">Esnek ve hiçbir şeyden ödün vermeyen yaklaşımımızın, çok çeşitli sektörlerdeki müşterilerimiz için ne kadar işe yaradığını kendiniz görün.</p>
                </div>
                <?php
            } else {
            ?>
            
            <h2 class="mb-3 text-primary fw-bold mb-5">PROJELERİMİZ</h2>
            <?php
            }
            ?>
            </div>

            <div class="row">
            <?php
            $project_images = [
                'project-1.webp',
                'project-2.webp',
                'project-3.webp'
            ];
            for ($i = 1; $i <= 3; $i++): ?>
                <div class="col-lg-4 col-12">
                    <div class="card card-project">
                        <div class="card-header">
                            <img src="./assets/images/<?php echo $project_images[$i - 1]; ?>" alt="Proje <?php echo $i; ?>" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                            <p class="project-location">
                                Türkiye
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?=($where == 'temsilcilik' ? 'temsilcilik-proje-detay.php' : 'proje-detay.php')?>" class="btn btn-detail">
                                <span>DETAYLI İNCELE</span>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="bi bi-arrow-right-short">
                                        <path d="M571.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-144-144c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L521.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l505.4 0-116.7 116.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l144-144z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            </div>

            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-auto text-center">
                    <a href="#" class="btn btn-outline-primary text-parlement rounded-0 px-5 justify-content-between">
                        <span> TÜM PROJELER </span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="bi bi-arrow-right-short">
                            <path d="M571.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-144-144c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L521.4 240 16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l505.4 0-116.7 116.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l144-144z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
}
?>