<?php 
    session_start();
    include "settings.php";
    if(isset($_SESSION["username"])){
        header('Location: index.php'); 
    }
    $conn = new mysqli($url, $user, $password,$db);
    $UUID = uniqid();
    $_SESSION["username"]=$UUID;
    echo $_SESSION["username"];
    $result = $conn->query('INSERT INTO users (id, UUID, team) VALUES (NULL, "'.$UUID .'", NULL)');
    header('Location: index.php');
    //echo $result;
?>
