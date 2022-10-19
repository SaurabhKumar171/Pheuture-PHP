



<?php
 include("kgn.php");
 echo "<br>".$KEY."<br>";

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

curl_setopt($curl, CURLOPT_URL, "https://mobily-ma.timwe.com/sa/ma/api/external/v2/sms/mt/1234");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $j_data);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','apikey:6080ee536440481a8acda80f827e2fc9y52','authentication:agqFtYPXGfwtHDpgkE4PmO22987cn7G0bDKcY/YY9fQ','external-tx-id:620b49cf-c429-4928-b12f-971fe580b17b'));
$result1 = curl_exec($curl);
 echo "<br>";
echo $result1;


?>
