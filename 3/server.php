

 <!-- curl hello world print   Task 1 -->
<?php
 
 $curl =curl_init();
curl_setopt($curl,CURLOPT_URL,"http://localhost/New%20Form/3/Api.php");
curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,2);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
curl_close($curl);
  if (empty($result)){
      echo "Nothing returned from url.<p>";
  }
  else{
      echo $result;
  }

?>

<?php
echo "<br>";
echo "<br>";
?>

<!-- Json Print  Task 2-->
<?php
 
 $curl =curl_init();
curl_setopt($curl,CURLOPT_URL,"http://localhost/New%20Form/3/Api_Json_encode.php");
curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,2);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result2 = curl_exec($curl);
curl_close($curl);
  if (empty($result2)){
      echo "Nothing returned from url.<p>";
  }
  else{
      echo $result2;
  }

?>


<?php
echo "<br>";
echo "<br>";
?>


 <!-- Task    3  decode json into array -->

<?php
 
 $curl =curl_init();
curl_setopt($curl,CURLOPT_URL,"http://localhost/New%20Form/3/Api_Json_decode.php");
curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

  if (empty($result)){
      echo "Nothing returned from url.<p>";
  }
  else{
      echo $result;
  }





echo "<br>";
echo "<br>";


// <!-- Task  4 send json to another file -->

curl_setopt($curl, CURLOPT_URL, "http://localhost/New%20Form/3/New_Api.php");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $result2);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result1 = curl_exec($curl);
echo $result1;





echo "<br>";
echo "<br>";


// Task 5 [form]

$curlf = curl_init();
curl_setopt($curlf, CURLOPT_URL, "http://localhost/New%20Form/3/form.php");
curl_setopt($curlf, CURLOPT_POST, 1);
curl_setopt($curlf, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curlf, CURLOPT_POSTFIELDS, http_build_query($_POST));
$resultf = curl_exec($curlf);
echo $resultf;
?>



