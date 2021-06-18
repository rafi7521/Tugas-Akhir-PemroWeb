<?php require "../../app/core/MVC_model.php"?>
<style>
  body{
    background-image: url("../images/donasi/bg.jpg");
  }
  .form-donasi{
    width: 400px;
    padding: 20px;
    background-color: white;
  }
  .container{
    height: auto;
    display: flex;
    justify-content: center;
  }
  .vector img{
    width: 400px;
  }

  
</style>

<body>
  <?php require "$absolute_path/app/views/template/navbar.php";?>
  <br><br><br><br>
  <div class="container">
    
    <div class="vector" data-aos="flip-right" data-aos-delay="300">
      <img src="../images/donasi/bg-donasi.jpg" alt="">
    </div>
    
    <div class="form-donasi" data-aos="flip-left" data-aos-delay="300">
    <h1 class="fs-5 text-center">Lets Save Our Forest For The Better Future </h1>
      <form action="" method="POST">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email_input" class="form-control" ><br>
        
        <label for="exampleInputEmail1" class="form-label">Jumlah Donasi</label>
        <input type="text" class="form-control" id="disabledTextInput" placeholder="Virtual account : 09123456789" >
        <input type="text" name="jumlah_donasi" class="form-control">
        
        <span>
          <center>
            <img style="width: 100px;" src="../images/donasi/logo1.png" alt="">
            <img style="width: 100px;" src="../images/donasi/logo2.png" alt="">
            <img style="width: 30px;" src="../images/donasi/logo3.png" alt="">
          </center>
        </span>
        
        <center><button type="submit" name="donasi" class="btn btn-success">Donate</button></center>
        
      </form>
    </div>
    
  </div>  
  
<?php
require "$absolute_path/app/views/template/footer.php";
?>
</body>