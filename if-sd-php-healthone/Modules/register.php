<?php
function getRegister():bool {
    global $pdo;

    $userName = "";
    $password = "";
    $email = "";
    $first_name = "";
    $last_name = "";
    $role = "member";
    $message = "";

    if (isset($_POST["submit"])) {
        $userName = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $emailCorrect = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $first_name = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $last_name = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS);




        if (empty($userName) || empty($password) || empty($first_name) || empty($last_name) || empty($role)) {
            $message = '<div class="fixed-top alert alert-danger alert-dismissible">Vul alle velden in!</div>';
        } elseif (!$emailCorrect) {
            $message = '<div class="fixed-top alert alert-danger alert-dismissible">Vul een correct email in!</div>';
        } else {
            try {
                $register = $pdo->prepare("INSERT INTO user (username, password, email, first_name, last_name, roles) VALUES (:username, :password, :email, :first_name, :last_name, :role)");
                $register->bindParam("username", $userName);
                $register->bindParam("password", $password);
                $register->bindParam("email", $emailCorrect);
                $register->bindParam("first_name", $first_name);
                $register->bindParam("last_name", $last_name);
                $register->bindParam("role", $role);
                if($register->execute()){
                    $message = '<div class="fixed-top alert alert-success alert-dismissible">Succes! Registreren gelukt.</div>';
                    echo $message;
                    return true;
                }
            }
            catch (PDOException $e){
                die($e->getMessage());
            }
        }
    }
    echo $message;
    return false;
}

?>