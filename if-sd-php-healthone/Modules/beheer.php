<?php
function getBeheerA():array
{
    global $pdo;
    $apparatuur = $pdo->query('SELECT * FROM product')->fetchAll(PDO::FETCH_CLASS, 'Product');
    return $apparatuur;
}

function getBeheerM():array
{
    global $pdo;
    $merk = $pdo->query('SELECT * FROM product ')->fetchAll(PDO::FETCH_CLASS, 'Merk');
    return $merk;
}



function deleteReview($id):string
{
    global $pdo;

    $query = $pdo->prepare("DELETE FROM product WHERE id =" . $id);
    if($query->execute()){
        $deleteMessage = "product is deleted at all";
    }else{
        $deleteMessage = "Er is iets mis gegaan";
    }
    return $deleteMessage;

}

function isPost()
{
    if ( (isset($_POST['name'])) && (!empty($_POST['name'])) &&
        (isset($_POST['category'])) && (!empty($_POST['category'])) &&
        (isset($_POST['description'])) && (!empty($_POST['description'])) &&
        (isset($_FILES['fileToUpload']['tmp_name'])) &&
        (!empty($_FILES['fileToUpload']['tmp_name'])) )
    {
        return true;
    } else
        return false;
}
function fileupload()
{
    global $message;
    $allowed=['gif','png','jpg'];
    $filename = $_FILES['fileToUpload']['name']; //original filename
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) || exif_imagetype($_FILES['fileToUpload']['tmp_name']) === false)
      {
    $message = "Sorry alleen GIF, PNG of JPG files toegestaan.";
    return false;
}
    $cat = $_POST['category'];
    $target_dir = "img/image/categories/".
        strtolower(getCategoryName((int)$_POST['category'])) ."/";

    $target_file = $_FILES["fileToUpload"]["name"];
    do {
        $target_file = $target_dir.md5($target_file).".$ext";
    } while (file_exists($target_file));
    //check file size
     if ($_FILES["fileToUpload"]["size"] > 500000) {
         $message = "Sorry, your file is too large.";
         return false;
     }
     //if everything is ok, try to upload file
     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $message = substr($target_file, 4);
         return true;
     } else {
         $message = "Sorry, there was een error uploading your file";
         return false;
     }
     }
function getCategoryName(int $id):string
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM category WHERE id = ? ');
    $sth->bindParam(1, $id, PDO::PARAM_INT);
    $sth->setFetchMode(PDO::FETCH_CLASS, Category::class);
    $sth->execute();
    $category = $sth->fetch();
    return $category->imgname;
}

function saveProduct(string $name,string $category,string $description,string $picture)
{

    GLOBAL $pdo;
    $sth = $pdo->prepare('INSERT INTO Product (name,description,category_id,picture)VALUES (?,?,?,?)');
    $sth->bindParam(1,$name);
    $sth->bindParam(2,$description);
    $sth->bindParam(3,$category);
    $sth->bindParam(4,$picture);

    $sth->execute();

}




?>