<?php
    // print_r($_REQUEST);
    echo "<b>json runs here</b>";
    $result = file_get_contents("php://input");
    echo $result;

?>