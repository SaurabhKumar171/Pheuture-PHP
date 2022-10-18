

<?php
    // print_r($_REQUEST);
   
    // $result = file_get_contents("php://input");
    $response = array(
        "responseData"=> array(), 
        "message"=> "string", 
        "inError"=> false, 
        "requestId"=> "string", 
        "code"=> "string" 
        );
        $enc_response=json_encode($response);
    
    echo $enc_response;

?>