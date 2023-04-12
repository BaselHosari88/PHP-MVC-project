<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
<div class="container">
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
    <h5 class="text-primary bg-light">Hello member</h5>
     werken aan je conditie.
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>

</html>