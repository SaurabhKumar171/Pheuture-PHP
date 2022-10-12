<?php 


// encode array into json  [Task ----->2]
$arr=array("name"=>"Saurabh Kumar Jha","age"=>"21","ph no."=>"9953","email"=>"@gmail.com");

$res=json_encode($arr);
echo $res;

?>