
<?php


$arr=array( "userIdentifier"=>"string",
"userIdentifierType"=>"string",
"catalogId"=>0,
"mcc"=>"string",
"mnc"=>"string",
"subSource"=>"string",
"trackingId"=>"string",
"clientIp"=>"string",
"campaignUrl"=>"string",
    "zip" => "123 ABC"
);



$curl=curl_init();

$j_data= json_encode($arr);

curl_setopt($curl, CURLOPT_URL, "http://localhost/New%20Form/Json_VAS/api.php");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $j_data);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result1 = curl_exec($curl);
 echo "<br>";
echo $result1;


?>
