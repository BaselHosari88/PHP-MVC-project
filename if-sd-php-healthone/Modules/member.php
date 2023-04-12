<?php



function changeProfile():bool
{
    global $pdo;
    $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $firstName=filter_input(INPUT_POST,'firstName');
    $lastName=filter_input(INPUT_POST,'lastName');

    $password=filter_input(INPUT_POST,'password');



    if($email!==false && !empty($firstName) &&!empty($lastName)){
        $sth = $pdo->prepare('UPDATE `user` SET `first_name`=:f,`last_name`=:l ,`password`=:z WHERE `email`=:e');

        $sth->bindValue(":f",$firstName);
        $sth->bindValue(":l",$lastName);
        $sth->bindValue(":e",$email);

        $sth->bindValue(":z",$password);

        $sth->execute();
        $_SESSION['user']->first_name=$firstName;
        $_SESSION['user']->last_name=$lastName;
        $_SESSION['user']->password=$password;
        return true;
    }else{
        return false;
    }
}
