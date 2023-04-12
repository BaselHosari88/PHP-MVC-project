<!doctype html>
<html>
<?php
include_once('defaults/head.php');
?>
<body class="bg bg-dark">
<div class="container">
    <?php

    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');

    global $categories;
    ?>

    <?php if(!empty($message)): ?>
        <div class="alert alert-primary" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <label for="inputName" class="form-label">naam</label>
        <input type="text " class="form-control" id="inputName"
               name="name"
               value='<?php if(isset($_POST['name'])) {echo
               $_POST['name'];} else {echo"";} ?>'>

        <div class="col-md-6">
            <label for="cat" class="form-label">category</label>
            <select class="form-select" id="cat" name="category">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?=$category->id?>"><?=$category->imgname?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="col-12">
            <label for="name" class="col-form-label">Beschrijving:</label>
            <textarea class="form-control" id="name"
                      name="description"><?php if (isset($_POST['description'])) {echo
                $_POST['description'];} else {echo "";} ?></textarea>
        </div>
        <div class="col-12">
            <label for="formFile" class="form-label">Image bij
                sportapparaat </label>
            <input class="form-control" name="fileToUpload" type="file"
                   id="forFile">
        </div>

        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </div>


    </form>
    <?php
    include_once('defaults/footer.php');
    ?>
    </div>
    </body>
</html>