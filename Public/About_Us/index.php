<?php require "../../app/core/MVC_model.php"?>

    <link rel="stylesheet" href="../css/about_us.css">


<body>
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->
    <br><br><br>
    <div class="container">
        <div class="comment">
            <table class='table table-striped'data-aos="fade-down" data-aos-duration:"1500">
                <tr class="table table-dark text-center">
                    <td>author</td>
                    <td>comment</td>
                </tr>
            
            
            <?php
                while($comment = mysqli_fetch_assoc($comments)){ ?>
                    <tr class="text-center">
                        <td><?= $comment['author'] ?></td>
                        <td><?= $comment['value'] ?></td>
                    </tr>
                    <?php
                }
            ?>

            </table>
        </div>
    </div>
<?php
require "$absolute_path/app/views/template/footer.php";
?>
</body>