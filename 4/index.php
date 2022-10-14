<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
      <tr>
        <th>Name</th>
        <th>role</th>
        <th>ID</th>
        <th>joining_date</th>
    </tr>

<?php 
$host ="localhost";
$user ="root";
$password="";
$db_name="phpbasicdb";

$conn =mysqli_connect($host,$user,$password,$db_name) or die("Connection Error: ".mysqli_connect_error());

if($conn){
   $sql ="SELECT * FROM `employee`";
   $result =mysqli_query($conn,$sql);

   while($row= mysqli_fetch_assoc($result)){
    // echo "<pre>";
    // echo $row['emp_name'], ":" , $row['emp_role'];
    echo"<tr>";
    echo"<th>".$row['emp_name']."</th>
        <th>".$row['emp_role']."</th>
        <th>".$row['id']."</th>
        <th>".$row['joining_date']."</th>";
        echo"</tr>";
   }
}
?>

      
    </table>
    
</body>
</html>