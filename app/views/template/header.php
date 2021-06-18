

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $page->title ?> | Donasi Kita </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/bootsrap/bootstrap.min.css" />
    <link href="<?= BASE_URL ?>/Public/js/aos-master/dist/aos.css" rel="stylesheet" />
    <style>
      body{
        background-color: white
      }
      a{
        text-decoration: none;
        font-weight: bold;
      }
      
      .navbar-link {
        display: flex;
        justify-content: space-around;
      }
            .navbar {
        position: fixed;
        width: 100%;
        z-index: 3;
        background-color: rgba(255, 255, 255, 0.4);
      }
      .navbar img {
        width: 100px;
        position: absolute;
        z-index: 4;
        top: -10px;
      }
      .myValue {
        width: 1000px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
      }
      @media (max-width: 1000px) {
        .myValue {
          width: 100%;
        }
      }

    </style>