<html>
<?php

include_once ('defaults/head.php');
?>
<body class="bg bg-dark">

<div class="container" style="font-family: 'Play', sans-serif;">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>

    <?php if(!empty($message)): ?>
        <div class=" alert alert-danger" role="alert">
            <?=$message?>
        </div>

    <?php endif;?>
    <h4>Kinglaptop </h4>
    <form class="row g-3 " method="POST">
        <div    class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email"name="email" class="form-control"  id="inputEmail">
        </div>

        <div    class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password"name="password" class="form-control"  id="inputPassword">
        </div>



        <div class="col-12">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>

    </form>
    <hr>

    <?php include_once ('defaults/footer.php');
    ?>


</div>


</body>
</html>
