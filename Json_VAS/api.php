

<?php
    // print_r($_REQUEST);
   
    // $result = file_get_contents("php://input");
    $response = array(
        "message"=>"string",
        "inError"=>false,
        "requestId"=>"string",
        "code"=>"string",
        "responseData"=>array(
        "transactionId"=>"string",
        "subscriptionResult"=>"string",
        "subscriptionError"=>"string"
        ));
        $enc_response=json_encode($response);
    
    echo $enc_response;

?>