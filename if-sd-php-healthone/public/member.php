<?php
global $params;
include_once "../Modules/member.php";

//$params[2] is de action en $params[3] een getal die de action nodig heeft
//check if user has role admin
if (!isMember()) {
    logout();
    header ("location:/home");
} else {

    switch ($params[2]) {

        case 'home':
            include_once "../Templates/member/home.php";

            break;

        case 'products':
            break;


        case 'profile':
            include_once "../Templates/member/profile.php";
            break;

        case 'editprofile':
            $titleSuffix = '| Profile';
            if(isset($_POST['profile'])){
                $result = changeProfile();
                if($result===true){
                    header("Location: /member/home");
                }else{
                    $message="NIET ALL VELDEN CORRECT INGEVULD";
                    include_once "../Templates/member/editprofile.php";
                }
                break;
            }
            else{
                include_once "../Templates/member/editprofile.php";
            }
            break;

        case 'changepassword':

            $titleSuffix = '| Profile';

            if(isset($_POST['profile'])){
                $checkPassword = checkLogin();
                if($checkPassword===true){
                    $result = changePassword();
                    if($result===true){
                        header("Location: /member/profile");
                    }else{
                        $message="NIET ALL VELDEN CORRECT INGEVULD";
                        include_once "../Templates/member/changePassword.php";
                    }
                    break;
                }

            }
            else {
                include_once "../Templates/member/changePassword.php";
            }
            break;


        default:
            break;
    }
}