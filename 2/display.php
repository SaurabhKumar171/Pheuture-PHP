

<?php

    session_start();
    $name=($_SESSION["name"])?$_SESSION["name"]:"Not define";
    $phone=($_SESSION["phone"])?$_SESSION["phone"]:"Not define";
    $email=($_SESSION["email"])?$_SESSION["email"]:"Not define";
    $password=($_SESSION["password"])?$_SESSION["password"]:"Not define";
    $gender=isset($_SESSION["Gender"])?$_SESSION["Gender"]:"Not define";
    $nationality=(isset($_SESSION["Nationality"]))?$_SESSION["Nationality"]:"Not define";
    echo "Your name is sourabh<br>";
    echo "Your phone number is ".$phone."<br>";
    echo "Your email_id is ".$email."<br>";
    echo "Your password is ".$password."<br>";
    echo "Your gender is ".$gender."<br>";
    echo "Your nationality is ".$nationality."<br>";
    include_once("./table.php");
 
 ?>

