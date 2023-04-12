<?php

function checkLogin():string
{
    global $pdo;

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

     if ($email!==false && !empty($password)){
         $sql = 'SELECT * FROM `user` WHERE `email` = :e AND `password` = :p' ;
         $sth = $pdo->prepare($sql);
         $sth->bindParam(':e', $email);
         $sth->bindParam(':p', $password);
         $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
         $sth->execute();
         $user = $sth->fetch();

         if ($user!==false) {

             $_SESSION['user'] = $user;


             if ($_SESSION['user']->role=="ADMIN") {

                return "ADMIN";
             } else {
                 return "MEMBER";
             }
         }
        return 'FAILURE';
     }
        return 'INCOMPLETE';
}

function isAdmin():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role == "ADMIN")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function isMember():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role === "MEMBER")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function makeRegistration():string

{
    global $pdo;
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if ($email!==false && !empty($password) &&!empty($firstName) &&!empty($lastName)){
        $sql = 'SELECT * FROM `user` WHERE `email` = :e ' ;
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e', $email);

        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $sth->execute();
        $user = $sth->fetch();

        if($user!==false){
        return "EXIST";
        }else{
            $sth= $pdo->prepare('INSERT INTO user (email,password,first_name,last_name,role) VALUES (?,?,?,?,"member")');
            $sth->bindParam(1,$email);
            $sth->bindParam(2,$password);
            $sth->bindParam(3,$firstName);
            $sth->bindParam(4,$lastName);
            $sth->execute();
            return "SUCCESS";
        }
    }
return "INCOMPLETE";

}
