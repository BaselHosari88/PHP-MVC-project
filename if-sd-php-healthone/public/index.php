<?php
require '../Modules/categories.php';
require '../Modules/products.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Modules/details.php';

session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
//print_r($request);
$title = "HealthOne";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        //var_dump($categories);die;
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' | Category';
        $id = $params[2];
        $products = getProducts($id);

        include_once "../Templates/products.php";
        break;

    case 'product':

        $titleSuffix = ' | product';
        $id = $params[2];
        $details = getDetails($id);
        $review = getReview($id);
        $user = getUserReview($id);

        include_once "../Templates/details.php";
        break;

    case 'login':
        $titleSuffix = ' | Login';

        if(isset($_POST['login'])){
            $result = checkLogin();

            switch ($result) {

                case 'ADMIN':

                 header("Location: /admin/home");

                    break;
                case 'MEMBER':

                    header("Location: /member/home");
//                    include_once ("../Templates/member/profile.php");
                    break;
                case 'FAILURE':
                    $message = "Email of password niet correct ingevuld";
                    include_once "../Templates/inloggen.php";
                    break;
                case 'INCOMPLETE':
                    $message = " FORMULIER niet volledig ingevuld";
                    include_once "../Templates/inloggen.php";
                    break;

            }

        }else{
            include_once "../Templates/inloggen.php";
        }

        break;

    case 'logout':
        $titleSuffix = ' | Home';
        logout();
        include_once "../Templates/home.php";
        break;

    case 'register':
        $titleSuffix = ' | Register';
        if (isset($_POST["register"])){
            $result = makeRegistration();
            switch ($result) {
                case "SUCCESS":
                    header("Location: /home");
                    break;

                case "INCOMPLETE":
                    $message = "Niet alle velden correct ingevuld";
                    include_once "../Templates/register.php";
                    break;
                case "EXIST":
                    $message = "Gebruiker bestaat al";
                    include_once "../Templates/register.php";
                    break;
            }
        }
        else {
            include_once "../Templates/register.php";
        }
        break;

    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;

    case 'admin':
        include_once ("admin.php");
        break;

    case 'member':
        include_once 'member.php';
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







