<?php
$PageTitle="LaZhopee - Home";
include_once('../templates/header.php'); 
include_once('../functions/items.php');
include_once('../functions/functions.php');

$_SESSION['username'] = $_POST['username'];

$_SESSION['test_array'] = $array;
$arrLength = count($array);
$imgPath = "/static/images/"

?>

<?php
    welcomeMsg($_SESSION['username']);
?>

<form action="cart.php" method="post">
    <?php 
        for($i = 0; $i <= $arrLength-1; $i++){
            $name = $_SESSION['test_array'][$i]['name'];
            $description = $_SESSION['test_array'][$i]['description'];
            $price = $_SESSION['test_array'][$i]['price'];
            $image = $_SESSION['test_array'][$i]['image'];
            
            getItem($name, $price, $description, $imgPath, $image);
            }
            
        ?>
        <br>
        <input type="submit" value="Cart">   
</form>

<?php

include_once('../templates/footer.php');
?>