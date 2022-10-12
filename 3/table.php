<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
      <tr>
        <th>Name</th>
        <th>Email Id</th>
        <th>Phone no.</th>
        <th>Gender</th>
        <th>Password</th>
        <th>Nationality</th>
       
      </tr>

      <tr>
        <th><?php echo "$name" ?></th>
        <th><?php echo "$email" ?></th>
        <th><?php echo "$phone" ?></th>
        <th><?php echo "$gender" ?></th>
        <th><?php echo "$password" ?></th>
        <th><?php echo "$Nationality" ?></th>
        
      </tr>
    </table>
    
</body>
</html>