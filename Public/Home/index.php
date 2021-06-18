<?php require "../../app/core/MVC_model.php"?>

    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
  </head>
  <body>
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <!-- Slider main container -->
    <div class="swiper-container" data-aos="fade-down" data-aos-duration="1500">
      <div class="heading-2">
        <center>
          <a href="" class="btn btn-outline-light"><h1 class="text-center">Total Donation : <?= $jumlah_donasi ?></h1></a>
        </center>
      </div>
      <div class="heading-1">
        <center>
          <a href="../Donasi/" class="btn btn-success"><h1 class="text-center">Donate Here</h1></a>
        </center>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div
          class="swiper-slide swiper-1"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
        <div
          class="swiper-slide swiper-2"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
        <div
          class="swiper-slide swiper-3"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
        <div
          class="swiper-slide swiper-4"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
        <div
          class="swiper-slide swiper-5"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
        <div
          class="swiper-slide swiper-6"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        ><div
          class="swiper-slide swiper-7"
          ><h1 class="text-center brand-name fs-4">Save our World Breath</h1></div
        >
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
    <br>


    <!-- myValue Start -->
    <div class="myValue" data-aos="fade-in">
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;height:200px;margin-left:20px;display:flex;width: 1000px;background-image: url('../images/logo/bg.png');background-position:center;background-size:cover;border:none">
        <p style="margin-top:8%;margin-left:35%;color:white;font-weight:bold;font-size:30px;color:black" class="card-text">Find Out Our Article</p>
        
      </div>
      <a href="../Artikel/artikel1.php" class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;margin-left:45px;margin-right:5px;height:400px;display:flex;width: 700px;background-image: url('../images/logo/logo1.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:42.4%;margin-left:78%;color:white;font-weight:bold;font-size:25px" class="card-text">Hutan Hujan Tropis</p>
        
      </a>
      <a href="../Artikel/artikel2.php" class="card box-card" data-aos='fade-left'data-aos-duration="2000" style="margin-bottom:5px;height:400px;margin-right:44.1px;display:flex;width: 300px;background-image: url('../images/logo/logo2.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:100%;color:white;font-weight:bold;font-size:25px" class="card-text">Penggundulan Hutan</p>
        
      </a>
      <a href="../Artikel/artikel3.php" class="card box-card" data-aos='fade-up' data-aos-duration="2000" style="margin-bottom:5px;height:400px;display:flex;width: 300px;background-image: url('../images/logo/logo3.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:100%;color:white;font-weight:bold;font-size:25px" class="card-text">Pelestarian Hutan</p>
        
      </a>
      <a href="../Artikel/artikel4.php" class="card box-card" data-aos='fade-down'data-aos-duration="2000" style="margin-bottom:5px;height:400px;margin-left:5px;display:flex;width: 700px;background-image: url('../images/logo/logo4.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:42.4%;margin-left:78%;color:white;font-weight:bold;font-size:25px" class="card-text">Hutan Lindung</p>
        
      </a>
      <div class="myValue">
      <a href="../Artikel/artikel5.php" class="card box-card" data-aos='zoom-out-right' data-aos-duration="1500" style="margin-bottom:5px;margin-left:45px;margin-right:5px;height:400px;display:flex;width: 700px;background-image: url('../images/logo/logo5.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:42.4%;margin-left:78%;color:white;font-weight:bold;font-size:25px" class="card-text">Satwa Langka</p>
        
      </a>
      <a href="../Artikel/artikel6.php" class="card box-card" data-aos='zoom-out-left'data-aos-duration="1500" style="margin-bottom:5px;height:400px;margin-right:44.1px;display:flex;width: 300px;background-image: url('../images/logo/logo6.jpg');background-position:center;background-size:cover">
        
        
          <p style="margin-top:100%;color:white;font-weight:bold;font-size:25px" class="card-text">Jenis Pohon</p>
        
      </a>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;height:200px;margin-right:0px;display:flex;width: 1000px;background-image: url('../images/logo/bg.png');background-position:center;background-size:cover;border:none">
        <p style="margin-top:8%;margin-left:45%;color:white;font-weight:bold;font-size:30px;color:black" class="card-text">Our Best Photo</p>
      </div>
      </div>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;margin-left:11.25px;margin-right:5px;height:400px;display:flex;width: 300px;background-image: url('../images/logo/logo7.jpg');background-position:center;background-size:cover">
      </div>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;margin-left:11.25;margin-right:5px;height:400px;display:flex;width: 300px;background-image: url('../images/logo/logo8.jpg');background-position:center;background-size:cover">
      </div>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;margin-left:11.25;margin-right:5px;height:400px;display:flex;width: 300px;background-image: url('../images/logo/logo9.jpg');background-position:center;background-size:cover">
      </div>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;margin-left:11.25;margin-right:5px;height:400px;display:flex;width: 300px;background-image: url('../images/logo/logo10.jpg');background-position:center;background-size:cover">
      </div>
      <div class="card box-card" data-aos='fade-left'data-aos-duration="2000" style="margin-bottom:5px;margin-left:11.25;display:flex;width: 300px;background-image: url('../images/logo/logo2.jpg');background-position:center;background-size:cover">
      </div>

    </div>
    <br><br>
      <div class="card box-card" data-aos='fade-right' data-aos-duration="2000" style="margin-bottom:5px;height:200px;margin-left:155px;display:flex;width: 1000px;background-image: url('../images/logo/bg.png');background-position:center;background-size:cover;border:none">
        <p style="margin-top:8%;margin-left:45%;color:white;font-weight:bold;font-size:30px;color:black" class="card-text">Our Team</p>
      </div>


      <div class="box">
      <div class="person">
          <div class="avatar" id="author1" data-aos="fade-left" data-aos-duration="1500">
          </div>
          <h1 class="fs-4 text-center" data-aos="fade-right" data-aos-duration="1000">Rafi Zulfikar</h1>
          <h1 class="fs-5 text-center" data-aos="fade-right" data-aos-duration="1000">192410101099</h1>
        </div>
        <div class="person">
          <div class="avatar" id="author2" data-aos="fade-right" data-aos-duration="1500">
          </div>
          <h1 class="fs-4 text-center" data-aos="fade-left" data-aos-duration="1000">Ananda Fizal</h1>
          <h1 class="fs-5 text-center" data-aos="fade-left" data-aos-duration="1000">192410101080</h1>
        </div>
      </div>
        
        <br><br><br>
      </div>

    </div>
    




    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        effect: 'flip',
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