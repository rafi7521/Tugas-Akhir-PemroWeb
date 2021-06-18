<?php
if(isset($_POST['donasi'])){
  if($_POST['email_input'] != "" && $_POST['jumlah_donasi'] != "" ){
    $email = $_POST['email_input'];
    $jumlah_donasi = $_POST['jumlah_donasi'];

    if(is_numeric($jumlah_donasi)){
      $query = mysqli_query($conn,"INSERT INTO donasi VALUES(0,'$email',$jumlah_donasi)");
      echo '
      <div class="alert alert-info" role="alert" style= "position: fixed;
      width: 100%;
      margin-top: 80vh;">
        Terimakasih banyak atas donasi yang anda sumbangkan, donasi tersebut akan digunakan untuk perawatan terumbukarang di Indonesia dari gangguan ulah manusia
      </div>      
      ';

    }
    else{
      echo "<script>alert('input donasi harus berupa angka')</script>";
    }

    


  }
}
