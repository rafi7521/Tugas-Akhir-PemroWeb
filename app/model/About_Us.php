<?php
$comments = mysqli_query($conn,"SELECT * FROM comment order by id_comment  desc ");
?>