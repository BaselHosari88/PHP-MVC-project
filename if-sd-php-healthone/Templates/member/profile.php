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

    <h4>Member profile</h4>
    <table class="table align-middle">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>email</td>
            <td><?=$_SESSION['user']->email ?></td>
        </tr>

        <tr>
            <td>firstname</td>
            <td><?=$_SESSION['user']->first_name ?></td>
        </tr>

        <tr>
            <td>lastname</td>
            <td><?=$_SESSION['user']->last_name ?></td>
        </tr>

        </tbody>
    </table>
<a type="button" class="btn btn-success btn-sm px-3"
   href="/member/editprofile">
    Profile aanpassen
</a>


<hr>
    <?php
    include_once ('defaults/footer.php');
    ?>

</div>

</body>
</html>