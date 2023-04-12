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
        ?>
        <?php if (!empty($message)) : ?>
            <div class="alert alert-success" role="alert">
                <?= $message ?>
            </div>
        <?php endif;  ?>
        <div class="container">
        <h5>Wie zijn wij</h5>
        <p>Heb jij zin om een nieuwe laptop te kopen? Bij Laptop Kings kun jij de beste laptops kopen voor de goedkoopste prijs! We hebben alle soorten laptops, zoals gaming laptops en
        zelfs MacBooks. U kunt uw laptops kopen op afbetaling, met abonnementen tot 3 jaar. Alle producten worden <b>gratis</b> bezorgd in Nederland.
        <br><br>
        Bij elke aankoop voor 23:59 wordt het product op hetzelfde dag bezorgd!
        </p>
        </div>
        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>