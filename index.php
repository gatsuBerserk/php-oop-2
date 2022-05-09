<?php 
    include_once __DIR__ ."/classes/User.php";
    include_once __DIR__ ."/classes/Food.php";
    include_once __DIR__ ."/classes/Accessories.php";
    $bocconcini = new Food("bocconcini", 12.4 , "bocconcini al maiale", "2022-07-12", "dog");
    $collare = new Accessories("collare", 20.3, "collare con fibia in acciaio", "prevenzione");
    $card = new Payment(1233545, 2024, 200.00);
    $user = new User("carmine","passnte", 1988, $card, true);
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
    <?php 
       
       
    ?>
</body>
</html>