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
        <div class="row">
            <div class="col-6">
                <div class="container border border-dark text-center p-2">
                    <h3 class="text-center">Klantenservice</h3>
                    <a href="#"><i class="bi bi-telephone-fill" style="font-size: 1rem; color: black;"></i></a> <b>070 1111-1111</b><br>
                    <a href="#"><i class="bi bi-envelope-fill" style="font-size: 1rem; color: black;"></i></a> <b>support@laptopkings.nl</b>
                    <br><p>Beschikbaar van Maandag tot vrijdag - 09:00 t/m 18:00</p>
                    <hr>
                    <a href="#"><i class="bi bi-pinterest m-2" style="font-size: 2rem; color: black;"></i></a>
                    <a href="#"><i class="bi bi-facebook m-2" style="font-size: 2rem; color: black;"></i></a>
                    <a href="#"><i class="bi bi-twitter m-2" style="font-size: 2rem; color: black;"></i></a>
                    <a href="#"><i class="bi bi-instagram m-2" style="font-size: 2rem; color: black;"></i></a>
                    <a href="#"><i class="bi bi-linkedin m-2" style="font-size: 2rem; color: black;"></i></a>
                </div>
            </div>
            <div class="col-6">
                <img src="/img/map-contact.png" class="img-thumbnail rounded mx-auto d-block" alt="no photo">
            </div>
        </div>

    </div>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>

</html>