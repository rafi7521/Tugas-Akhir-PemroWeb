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
          <a href="" class="btn btn-outline-light"><h1 class="text-center">pelestarian Hutan</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-3"
          ></div
        >
        <div
          class="swiper-slide swiper-2"
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
        <h1 class="text-center">1</h1>
        <p>Inovasi Teknologi</p>
        <p>
        Teknologi yang dapat dimanfaatkan untuk mengurangi dan memantau deforestasi di Indonesia seperti pemanfaatan penginderaan jarak jauh (remote sensing) dan teknologi drone untuk memetakan dan memantau kondisi terkini tutupan hutan. Pemanfaatan kamera jebak (camera trap) untuk melacak keberadaan satwa liar pun akan membantu para konservator dalam memanajemen kawasan konservasi.
        </p>
        <h1 class="text-center">2</h1>
        <p>
        Efisiensi Pemanfaatan Lahan
        </p>
        <p>
        Sistem pemanfaatan lahan dengan cara konversi hutan alam menjadi perkebunan monokultur merupakan sistem yang tidak lestari, karena jumlah tutupan hutan yang sangat terbatas untuk dapat dimanfaatkan. Mengkombinasikan penanaman tanaman hutan dalam pertanian dapat memperkecil potensi erosi, memaksimalkan produksi biomassa, dan memaksimalkan interaksi positif antara tanah dengan tanaman.Penerapan sistem agroforestry (kombinasi penanaman tanaman hutan dan tanaman pertanian dalam unit lahan yang sama) merupakan salah satu solusi dalam pemanfaatan lahan yang lestari alih-alih ladang berpindah dan pertanian monokultur yang menghilangkan keragaman hayati yang ada.
        </p>

        <h1 class="text-center">3</h1>
        <p>
        Perubahan Pola Konsumsi
        </p>
        <p>
        Aktivitas pertanian komersial menjadi aktor penting atas lebih dari setengah deforestasi yang terjadi, karena membuka lahan hutan untuk memproduksi komoditas yang digunakan sebagai bahan konsumen sehari-hari.Dibutuhkan perubahan pola konsumsi secara individu atau kolektif menjadi lebih efisien dalam pemanfaatan sumberdaya alam hayati. Permintaan pasokan sumberdaya alam yang tinggi untuk minyak sawit, daging sapi, kedelai serta kertas dan pulp dapat meningkatkan laju deforestasi, karena lahan hutan dijadikan sasaran untuk dapat memproduksi pasokan tersebut.
        </p>

        <h1 class="text-center">4</h1>
        <p>
        Dukungan Kebijakan
        </p>
        <p>
        Diperlukan dukungan oleh Pemerintah dalam pengelolaan dan perlindungan hutan untuk memberantas penebangan hutan secara ilegal, juga melakukan penegakan hukum bagi pelakunya. Aksi restorasi lahan yang terlanjur rusak akibat pemanfaatan intensif harus dilakukan. Penyediaan bantuan teknis dan finansial dari Pemerintah kepada masyarakat pun diperlukan guna meningkatkan pengelolaan lahan yang berkelanjutan.
        </p>

        <h1 class="text-center">5</h1>
        <p>
        Reboisasi
        </p>
        <p>
        penanaman kembali hutan yang telah ditebang (tandus, gundul). Reboisasi berguna untuk meningkatkan kualitas kehidupan manusia dengan menyerap polusi dan debu dari udara, membangun kembali habitat dan ekosistem alam, mencegah pemanasan global dengan menangkap karbon dioksida dari udara, serta dimanfaatkan hasilnya (terutama kayu). Salah contoh upaya reboisasi yang menarik adalah prakarsa pemerintah Kabupaten Garut yang dimulai pada tahun 2009: meminta setiap pengantin baru untuk menanam 10 pohon dan 50 pohon bagi pasangan yang bercerai
        </p>

      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px;width:400px" href="../Artikel/artikel1.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">jenis Hutan</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px;width:400px" href="../Artikel/artikel2.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Penggundulan Hutan</p>
            </div>
          </a>
        <a style="padding: 70px;height:400px" href="../Artikel/artikel6.php" class="card" style="width: 18rem;">
          <img style="border-radius: 150px;" src="../images/logo/logo6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Jenis Pohon</p>
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