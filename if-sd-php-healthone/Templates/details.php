<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body class="bg bg-dark">

<div class="container" style="font-family: 'Play', sans-serif;">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $review;
    global $description;
    global $user;
   

    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
        <?php global $details ?>
        <?php foreach ($details as $detail): ?>

            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/category/<?= $detail->id ?>">
                            <img class="product-img img-responsive center-block" src='/img/<?= $detail->picture ?>'/>
                        </a>
                        <div class="card-title mb-3"><h3><?= 'Name :'. $detail->name ?></h3></div>
                        <div class="card-title mb-3"><?= 'Desciption : '.$detail->description ?></div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($review as $com): ?>

            <div class="col-12">




                <div class="card">
                    <?php foreach ($user as $userName): ?>
                        <p class="mb-0"><b><?='Email :'. $userName-> email ?><br></b><?= $com->  date ?></p>
                    <?php endforeach;?>
                    <hr class="m-0 p-0">

                        <a href="/category/<?= $com->id?>">
                        </a>
                        <div class=" "><?= $com->name ?></div>
                        <div class=""><?= 'Feed Back from klanten : '.$com->description ?></div>


                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <?php
    include_once('defaults/footer.php');

    ?>
</div>
</body>
</html>

