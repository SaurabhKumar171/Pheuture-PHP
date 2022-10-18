

<?php
    // print_r($_REQUEST);
   
    // $result = file_get_contents("php://input");
    $response = array(
        "requestId"=>"string", 
        "code"=>"string", 
        "inError"=>boolean, 
        "responseData"=>array(  
        "transactionUUID"=>"string" 
        ));
        $enc_response=json_encode($response);
    
    echo $enc_response;

?>