<?php
global $params;
include_once "../Modules/beheer.php";
//check if user has role admin
if (!isAdmin()) {
    logout();
    header ("location:/home");
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {

        case 'home':
            $aProduct = getBeheerA();
            include_once "../Templates/admin/home.php";
            break;

        case 'products':
            break;

        case 'beheer':
            include_once "../Templates/admin/home.php";
            break;

        case 'add':
            if(isPost()){
                if(fileupload()){
                    global $message;
                    $cat = $_POST['category'];


                    saveProduct($_POST['name'],$_POST['category'], $_POST['description'], $message);
                    header("Location: /admin/home");
                } else {
                    $categories = getCategories();
                    include_once "../Templates/admin/addproduct.php";
                }
            } else {
                $categories = getCategories();
                include_once "../Templates/admin/addproduct.php";
            }
            break;

        case 'delete':
            $id =$params[3];
            $deleteMessage =  deleteReview($id);
            $aProduct = getBeheerA();
            include_once "../Templates/admin/home.php";
            break;

        default:
            var_dump("defalut");
            break;

    }
}