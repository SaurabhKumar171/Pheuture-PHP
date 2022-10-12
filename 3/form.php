<?php
echo "<br>";

      $name = (isset($_POST["name"])) ? $_POST["name"] : "No value found!";
      $email = (isset($_POST["email"])) ? $_POST["email"] : "No value found!";
      $phone =(isset($_POST["phone"])) ? $_POST["phone"] : "No value found!";    
      $gender = (isset($_POST["Gender"])) ? $_POST["Gender"] : "No value found!";  
      $password = (isset($_POST["password"])) ? $_POST["password"] :"No value found!";     
      $Nationality = (isset($_POST["Nationality"])) ? $_POST["Nationality"] : "No value found!";
     
   include_once("./table.php");

?>