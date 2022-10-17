
<?php

$cons= new mysqli("localhost","root","","phpbasicdb") or die("error in db".mysql_connect_error());
$name=$_POST['names'];
$pass=$_POST['passwords'];
$result = $cons -> query("select * from form where name='$name' AND password = '$pass'");
               if(mysqli_num_rows($result) > 0){
               while($rows = $result -> fetch_object()){
                  $id = $rows -> id;
                  $name = $rows -> name;
                  $age = $rows -> age;
                  $email = $rows -> email;
                  $password = $rows -> password;
                  $gender = $rows -> gender;
                  $country = $rows -> country;
                  echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$age</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$gender</td>
                        <td>$country</td>
                  </tr>"; 
               }
               }else{
               echo "User not Exists";
               }
?>

</tbody>
</body>
</html>