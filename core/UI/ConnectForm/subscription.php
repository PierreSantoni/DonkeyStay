<?php
use App\models\User;

// if(isset($_POST['Subscription']) || isset($_POST['Connection'])){header("Location:/connectForm/redirect.php");}

if(isset($_POST)){
    session_start();
    $_SESSION["userID"] = $_POST["userID"];   
}

if(isset($_POST['Subscription'])){
    echo "<br>INSCRIPTION<br>";

    $newUser = new User;
    $users = new User;
    /*
    $newUser = $newUser
    ->set_userFirst($_POST['userFirst'])
    ->set_userLast($_POST['userLast'])
    ->set_userEmail($_POST['userEmail'])
    ->set_userLogin($_POST['userLogin'])
    ->set_userPass($_POST['userPass']);
    */
    $newUser = $newUser->hydrate($_POST);
    $newUser->create($newUser);

    echo "<pre>";
    var_dump($users->findAll());
    echo "</pre>";

}elseif(isset($_POST['Connection'])){
    echo "<br>CONNECTION<br>";

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

}else{
    echo "ERROR";
}