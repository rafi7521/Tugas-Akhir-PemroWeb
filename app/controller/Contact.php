<?php
if(isset($_POST['send'])){
    $author = $_POST['author'];
    $value = $_POST['mail'];
    $query = mysqli_query($conn,"INSERT into comment VALUES('$author','$value',0)");
    echo "<script>alert('Successfull add comment')</script>";
}

?>