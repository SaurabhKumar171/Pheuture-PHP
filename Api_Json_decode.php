<?php 
// decode json into array  [task ----->3]

//encode
$arr=array("Saurabh Kumar Jha","21","9953","@gmail.com");
$res=json_encode($arr);

//decode
$res=json_decode($res);
print_r($res);
?>