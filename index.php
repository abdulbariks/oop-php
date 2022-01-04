<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP </title>
</head>
<body>
    <?php
      $userNamne="Abdul Barik";
      $password=123456;
         if($userNamne == "Abdul Barik"){
             if($password == 123456){

                echo "welCome" . " " . $userNamne;
             }
             else{
                 echo "Password is wrong";

             }
            }
         else{
            echo "User Name is wrong";
         }
    ?>
</body>
</html>