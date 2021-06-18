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
          <a href="" class="btn btn-outline-light"><h1 class="text-center">Hutan Lindung</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-1"
          ></div
        >
        <div
          class="swiper-slide swiper-2"
          ></div
        >
        <div
          class="swiper-slide swiper-3"
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
        Hutan hujan tropika atau yang biasa disebut dengan hutan hujan tropis merupakan rumah untuk setengah spesies flora dan fauna di seluruh dunia. Hutan hujan tropis juga dijuluki sebagai "farmasi terbesar dunia" karena hampir 1/4 obat modern berasal dari tumbuhan di hutan hujan ini. tingkat keanekaragaman hayati di hutan hujan tropis sangat tinggi. Para ilmuwan memperkirakan bahwa sekitar setengah dari spesies darat Bumi hidup di hutan hujan. Jenis flora dan fauna di hutan ini berbeda dengan yang lain. Tercatat lebih dari 3.000 spesies flora hidup dalam hutan hujan tropis. Biasanya flora yang ditemukan adalah yang menempel pada tumbuhan (flora epifit), jamur (cendawan), lumut, anggrek, dan rotan. Sementara itu, jenis fauna di hutan hujan tropis, seperti burung, mamalia, monyet, hingga kupu-kupu.
        </p>
        <p>
        Ada empat ciri utama hutan hujan tropis, pertama adalah curah hujan yang tinggi sepanjang tahun, antara 200 - 225 cm per tahun. Kemudian, matahari bersinar sepanjang tahun, lalu dari bulan satu ke bulan yang lain perubahan suhunya relatif kecil.Bioma hutan hujan tropis dibagi menjadi empat lapisan utama, yakni tajuk puncak, tudung, tajuk menengah, dan dasar hutan. Daerah di bawah kanopi atau tudung payung gelap sepanjang hari sehingga tidak ada perubahan suhu antara siang dan malam hari.
        </p>
        <p>
        Selain menyokong keanekaragaman hayati dan masyarakat yang bergantung pada hutan, hutan hujan tropis memainkan suatu peran vital dalam iklim global dengan kemampuannya menyerap karbon dioksida, gas yang dipercaya oleh ahli sebagai penyebab terjadinya pemanasan global. Pepohonan hutan merupakan suatu komponen yang dapat menyerap karbon atmosfer (carbon sequestration) dan mengubahnya menjadi oksigen melalui proses fotosintesis. Karbon yang diserap diubah menjadi biomassa (carbon sink) sekaligus disimpan dalam sistem sebagai stok karbon (carbon stock). Hutan hujan tropis merupakan penyerap karbon terbaik dibandingkan dengan ekosistem lainnya. Hutan hujan tropis juga berperan dalam menciptakan kondisi cuaca lokal dengan membuat hujan dan mengatur suhu.
        </p>
        <p>
        Hutan hujan tropis memiliki kemampuan yang baik dalam menyerap dan menyimpan air sehingga dapat dijadikan penyangga dari bencana banjir dan kekeringan global. Ketika musim hujan tiba, hutan hujan tropis dapat mengurangi limpasan air melalui stratifikasi tajuk yang berlapis-lapis sehingga sebagian besar air tetap berada di dalam ekosistem. Sedangkan ketika musim kemarau tiba, kekurangan air dapat ditutupi dari cadangan yang diperoleh selama musim hujan.
        </p>

        

      </div>
      <div class="artikel_lain">
        <a style="padding: 70px;height:400px" href="../Artikel/artikel1.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Penggundulan Hutan</p>
            </div>
          </a>
          <a style="padding: 70px;height:400px" href="../Artikel/artikel3.php" class="card" style="width: 18rem;">
            <img style="border-radius: 150px;" src="../images/logo/logo3.jpg" class="card-img-top" alt="...">
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