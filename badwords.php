<?php
$text= $_GET['text'];
$badword= $_GET['censured']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Questo e' il tuo testo:</h2>
<p>
    <?php echo $text;
    ?>
 </p> 
<p>
    <?php
    echo strlen($text);
     ?>
</p> 

<h2>Questo e' il tuo testo censurato:</h2>
    <?php 
    $censured_letter= str_replace($badword, "**", $text);
    echo $censured_letter;
   
    ?>
     <p><?php
    echo strlen($censured_letter);
     ?></p> 
   
</body>
</html>