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
    include_once('../Modules/register.php')
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
            <input type="email"name="email" class="form-control"  id="inputEmail" placeholder="example@example.com">
        </div>

        <div    class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password"name="password" class="form-control"  id="inputPassword">
        </div>

        <div    class="col-md-6">
            <label for="inputFirstName" class="form-label">first name</label>
            <input type="text" name="firstName" class="form-control"  id="inputFirstName" value="<?php if(isset($_POST['firstName'])) {
                echo $_POST['firstName'];}else{echo "";} ?>" placeholder="Jan">

        </div>


        <div    class="col-md-6">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" class="form-control"  id="inputLastName" value="<?php if(isset($_POST['lastName'])) {
                echo $_POST['lastName'];}else{echo "";} ?>" placeholder="Klaassen">

        </div>

        <div class="col-12">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>

    </form>
    <hr>

    <?php include_once ('defaults/footer.php');
    ?>


</div>


</body>
</html>
