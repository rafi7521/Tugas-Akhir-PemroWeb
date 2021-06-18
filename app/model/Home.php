<?php
$query = mysqli_query($conn,"SELECT jumlah_donasi from donasi");
$comments = mysqli_query($conn,"SELECT * FROM comment");
?>