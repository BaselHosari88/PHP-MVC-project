<!doctype html>

<html>
<?php
include_once('defaults/head.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <?php if(!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
    </div>
    <?php endif;?>

    <form class="row g-3" method="POST">
        <div class="col-md-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                   id="inputEmail" readonly="readonly" value="<?php if (isset($_SESSION['user']->email)) {echo $_SESSION['user']->email;}else {echo"";}?>">

        </div>
        <div class="col-md-6">
            <label for="inputFirstName" class="form-label">Firstname</label>
            <input type="text" name="firstName" class="form-control"
                   id="inputFirstName"  value="<?php if (isset($_SESSION['user']->first_name)) {echo $_SESSION['user']->first_name;}else {echo"";}?>" placeholder="pietje_puk ">

        </div>

        <div class="col-md-6">
            <label for="inputLastName" class="form-label">LastName</label>
            <input type="text" name="lastName" class="form-control"
                   id="inputLastName"  value="<?php if (isset($_SESSION['user']->last_name)) {echo $_SESSION['user']->last_name;}else {echo"";}?>" placeholder="klaassen ">

        </div>

        <div class="col-md-12">

            <label for="inputPassword" class="form-label">change password</label>
            <input type="text" name="password" class="form-control"

                   id="inputPassword"  value="<?php if (isset($_SESSION['user']->password)) {echo $_SESSION['user']->password;}else {echo"";}?>">

        </div>

        <div class="col-12">
            <button type="submit" name="profile" class="btn btn-primary">Annpasen Profile</button>
        </div>

    </form>

    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>

</div>

</body>
</html>