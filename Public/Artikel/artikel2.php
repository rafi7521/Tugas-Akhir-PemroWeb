<?php require "../../app/core/MVC_model.php"?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
<link rel="stylesheet" href="../css/artikel.css?<?php echo time(); ?>">

<body>
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
  <div class="container">

    <div class="swiper-container" data-aos="fade-down" data-aos-duration="1500">
      <div class="heading-2">
        <center>
          <a href="" class="btn btn-outline-light"><h1 class="text-center">Penggundulan Hutan</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-2"
          ></div
        >
        <div
          class="swiper-slide swiper-3"
          ></div
        >
        <div
          class="swiper-slide swiper-1"
          ></div
        >
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>

    <div class="artikel">
      <div class="paragraf">
        <p>
        Penggundulan hutan atau deforestasi adalah kegiatan penebangan hutan atau tegakan pohon (stand of trees) sehingga lahannya dapat dialihgunakan untuk pemakaian nir-hutan (non-forest use), seperti pertanian, peternakan atau kawasan perkotaan. Istilah deforestasi hampir sering disalahartikan untuk menggambarkan perkerjaan penebangan yang semua pohonnya di suatu daerah ditebang habis. Namun, di kota beriklim ugahari yang lumayan lengas (temperate mesic climate), penebangan semua pohon sesuai dengan langkah-langkah pelaksanaan kehutanan yang berkelanjutan (sustainable forestry)–tepatnya dianggap sebagai ‘panen permudaan’ (harvest regeneration).Di daerah ini, permudaan alami oleh tegakan hutan biasanya tidak tetao terjadi tanpa gangguan, baugs secara alami maupun gara-gara manusia. Selain itu, gara-gara dari panen permudaan seringkali mirip dengan gangguan alami, termasuk hilangnya keanekaragaman hayati (biodiversity) setelah perusakan hutan hujan (rainforest) yang berlangsung secara alami.
        </p>
        <p>
        Berikut merupakan kerugian akibat penebangan hutan secara liar :
        </p>
        <p>
        1.Penebangan hutan atau illegitimate logging sekarang juga mengakibatkan timbulnya seluruh anomali di sektor kehutanan.
        </p>
        <p>
        2.Salah satu anomali terburuk sebagai akibat kerusakan hutan merupakan ancaman proses deindustrialisasi bezirk kehutanan.
        </p>
        <p>
        3.Sektor kehutanan lokal yang secara konseptual bersifat berkelanjutan karena ditopang dengan sumber daya alam yang bersifat terbaharui yang ditulang punggungi oleh aktivitas industrialisasi kehutanan di sektor hilir dan pengusahaan hutan disektor hulu, kini sudah berada di titik ambang kehancuran.
        </p>
        <p>
        4.Penebangan liar juga amat merugikan bagi kehidupan, sebab keberadaan hutan sangatlah berharga sebagai penjaga keseimbangan alam. Seperti yang telah kindertageseinrichtung ketahui tentang penyebab pemanasan global, yang merupakan salah satu contoh dampak untuk penebangan liar.
        </p>
        <p>
        5.Pemanasan global bukan hanya bersumber untuk asap kendaraan bermotor akan tetapi juga dipengaruhi oleh situasi hutan yang tidak seimbang.
        </p>


      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px" href="../Artikel/artikel3.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Jenis Hutan</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px" href="../Artikel/artikel4.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Pelestarian Hutan</p>
            </div>
          </a>
        <a style="padding: 70px;height:400px" href="../Artikel/artikel5.php" class="card" style="width: 18rem;">
          <img style="border-radius: 150px;" src="../images/logo/logo5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Satwa Langka</p>
          </div>
          </a>
      </div>
    </div>
      
  </div>
</body>



<script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        effect: 'slide',
        followFinger: 'true',
        allowTouchMove: 'true',

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
      });
    </script>
<?php
require "$absolute_path/app/views/template/footer.php";
?>