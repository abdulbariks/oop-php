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
           switch ($userNamne) {
               case 'Barik':
                   echo "My Name is " . $userNamne;
                   break;
                case 'Abdul':
                    echo "My Name is " . $userNamne;
                    break;
                case 'Abdul Barik':
                     echo "My Name is " . $userNamne;
                     break;
                    
                
                default:
                   echo "No Match Name";
                   break;
        
         }
    ?>
</body>
</html>