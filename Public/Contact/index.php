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
    
    <div class="vector" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="300">
      <img src="../images/donasi/bg-contact.jpg" alt="">
    </div>
    
    <div class="form-donasi"data-aos="fade-down" data-aos-duration="1500" data-aos-delay="300">
    <h1 class="fs-5 text-center">Send Your Advice And Dont Forget To Donate </h1>
      <form action="" method="POST">
        <input type="text" name="author" class="form-control" placeholder="author">
        <br>
        <center>
          <textarea class="form-control" name="mail" id="" cols="30" rows="7" placeholder="Text Here">
            
          </textarea>
        </center>
        <br>
        <center><button type="submit" name="send" class="btn btn-success">Send</button></center>
        
      </form>
    </div>
    
  </div>  
<?php
require "$absolute_path/app/views/template/footer.php";
?>
</body>