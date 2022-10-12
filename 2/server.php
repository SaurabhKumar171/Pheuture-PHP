<?php
    $name=$_POST["name"]?$_POST["name"]:"Not define";
    $phone=$_POST["phone"]?$_POST["phone"]:"Not define";
    $email=$_POST["email"]?$_POST["email"]:"Not define";
    $password=$_POST["password"]?$_POST["password"]:"Not define";
    $gender=isset($_POST["Gender"])?$_POST["Gender"]:"Not define";
    $nationality=(isset($_POST["Nationality"]))?$_POST["Nationality"]:"Not define";
   //  echo "Your name is ".$name."<br>";
   //  echo "Your phone number is ".$phone."<br>";
   //  echo "Your email_id is ".$email."<br>";
   //  echo "Your password is ".$password."<br>";
   //  echo "Your gender is ".$gender."<br>";
   //  echo "Your nationality is ".$nationality."<br>";

  include_once("./table.php");
   session_start();
    $_SESSION["name"]=$name;
    $_SESSION["phone"]=$phone;
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    $_SESSION["Gender"]=$gender;
    $_SESSION["Nationality"]=$nationality;
    
   // header("refresh:3;url=display.php");

      print_r($_FILES);

      $target_dir= "uploads/";
      $main_file_name= $_FILES["files"]["name"];
      $main_file_size=$_FILES["files"]["size"];
      $target_file= $target_dir.basename($main_file_name);
      $ext =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      $temp_file_name= $_FILES["files"]["tmp_name"];
      $target_temp_file = $target_dir.basename($temp_file_name);


      $finalpath =$target_dir.$main_file_name;

      if(file_exists($finalpath)){
         $file1_name = $name."_".time()."saurabh".".".$ext;
         $finalpath= $target_dir.$file1_name;
      }
      echo(move_uploaded_file($temp_file_name,$finalpath)) ? "file uploaded successfully" : "unable to upload file";
   
 ?>

