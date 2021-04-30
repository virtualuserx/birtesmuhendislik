<?php


if($_POST["message"]) {


mail("virtualuserx@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


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
    
    <form method="post" action="subscriberform.php">


        <textarea name="message"></textarea>
        
        
        <input type="submit">
        
        
        </form>


</body>
</html>