
<?php

$cons= new mysqli("localhost","root","","phpbasicdb") or die("error in db".mysql_connect_error());
$name=$_POST['names'];
$pass=$_POST['passwords'];
$result = $cons -> query("select * from form where name='$name' AND password = '$pass'");
               if(mysqli_num_rows($result) > 0){
                  session_start();
               while($rows = $result -> fetch_object()){
                  $_SESSION['id'] = $rows -> id;
                  $_SESSION['name'] = $rows -> name;
                  $_SESSION['age'] = $rows -> age;
                  $_SESSION['email'] = $rows -> email;
                  $_SESSION['password'] = $rows -> password;
                  $_SESSION['gender'] = $rows -> gender;
                  $_SESSION['country'] = $rows -> country;
                  
                  Echo "Login Successfully!";
                  header("refresh:4;url=render_details.php");
               }
               }else{
               echo "OOPS !User not Exists";
               header("refresh:4;url=struc.html");
               }
?>

</tbody>
</body>
</html>