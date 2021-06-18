<?php
require "$absolute_path/app/model/khusus.php";


if(isset($_POST['delete_comment'])){
    $id_comment = $_POST['id_comment'];
    $query = mysqli_query($conn,"DELETE FROM comment WHERE id_comment = $id_comment ");
    echo "<script>alert('comment berhasil terhapus')</script>"; 
    // header("Location: ".BASE_URL."/Public/About_us/");
    header("Refresh:0; url=".BASE_URL."/Public/khusus/");

}
?>