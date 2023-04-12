<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
include_once ('../Modules/beheer.php');




?>

<body class="bg bg-dark">

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item">Beheer</li>
        </ol>

    </nav>

    <?php
    global $deleteMessage;

    ?>
    <?php if (!empty($deleteMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $deleteMessage ?>
        </div>
    <?php endif;  ?>

    <div class="bg bg-danger      p-2 m-3 ">


        <h1>WELCOME WITH ADMIN PAGE </h1>
        <p>De beheerder kan alle producten zien en hij kan ook deleten en toevoegen omdat hij de beheerder is</p>
        <p>wilt u nog controllen dan ga naar beneiden </p>
        <br>
        <br>
        <p></p>
    </div>



    <div class="bg bg-primary  p-2 m-3 ">


        <h1>voor meer informatie kijk  hieronder  </h1>
        <p>De beheerder kan alle producten zien en hij kan ook deleten en toevoegen omdat hij de beheerder is</p>
        <p>wilt u nog controllen dan ga naar beneiden </p>
        <br>
        <br>
        <p></p>
    </div>









    <table class="table table-hover ">
        <thead>
        <div class="p-3 bg bg-success m-3 text-center row">
            <div class=" col-1"><h2>NR</h2></div>
            <div class="col-1"><h3>NAME  </h3></div>
            <div class="col-1"><h3>PHOTO</h3></div>
            <div class="col-4"><h2>DESCRIPTION</h2></div>
            <div class="text col-2"><h2>DELETE</h2></div>

        </div>
        </thead>
    </table>


    <?php

    ?>

    <?php
    global $aProduct;
    ?>

    <?php
    foreach ($aProduct as $app): ?>



        <div class='row border p-2 m-3 text-center'>

            <div class="col-1"><?= $app->id ?></div>
            <div class="col-1"><?= $app->name ?></div>
            <div class="col-1">  <img class="product-img img-responsive center-block" src='/img/<?= $app->picture ?>'/></div>
            <div class="col-4"><?= $app->description?></div>
           <div class="col-2 p-2 m-3 text-center"><?php echo "<a class='btn btn-primary'  href='delete/". $app->id ."'> delete "."</a>" ;?></div>


        </div>
    <?php endforeach; ?>
  <a type="button" class="btn btn-success" href="/admin/add">
      insert
  </a>

    <?php
    include_once('defaults/footer.php');
    ?>

</div>


</body>
</html>