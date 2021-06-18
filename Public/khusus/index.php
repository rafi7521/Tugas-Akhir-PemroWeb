<?php require "../../app/core/MVC_model.php"?>

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
                    <td></td>
                </tr>
            
            
            <?php
                while($comment = mysqli_fetch_assoc($comments)){ ?>
                    <form action="" method="POST">
                        <tr class="text-center">
                            <td><?= $comment['author'] ?></td>
                            <td><?= $comment['value'] ?></td>
                            <input type="hidden" value="<?= $comment['id_comment'] ?>" name="id_comment" id="">
                            <td><button type="submit" name="delete_comment" class="btn btn-danger" > x </button></td>
                        </tr>
                    </form>
                    
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