Hi <?php echo $_POST["name"];?><br>
Your email is : 
<?php if ($_POST["email"]) 
        echo $_POST["email"]; 
    else 
        echo "EMail not defined";
?><br>
Your Phone no. is : <?php echo $_POST["phone"];?><br>
Your Gender is: <?php if (isset($_POST["Gender"])) echo $_POST["Gender"];?><br>
Your nationality is :  <?php echo $_POST["Nationality"];?><br>
