<?php 
    require_once __DIR__ ."/classes/User.php";
    require_once __DIR__ ."/classes/Products.php";
    require_once __DIR__ ."/classes/Food.php";
    require_once __DIR__ ."/classes/Accessories.php";
    require_once __DIR__ ."/classes/Payment.php";
   
    

    $bocconcini = new Food("bocconcini", 14.99 , 1, "bocconcini al maiale", "2022-07-12", "dog");
    $collare = new Accessories("collare", 20.3, 1, "collare con fibia in acciaio", "prevenzione");
    $card = new Payment(1233545, 2025, 200.00);
    $user = new User("carmine","passante", 1988, $card, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2 Carmine Passante classe 55 </title>
</head>
<body>
    <p>
        <?php
            echo $user->getBalance();
        ?>
    </p>
    
</body>
</html>