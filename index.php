<?php
$PageTitle="LaZhopee - Home";
include_once('templates/header.php'); 
include_once('items.php');

$_SESSION['username'] = "ker";
$_SESSION['test_array'] = $array;
$arrLength = count($array);
$imgPath = "/static/images/"
?>

<form action="cart.php" method="post">
    <?php 
        for($i = 0; $i <= $arrLength-1; $i++){
            $name = $_SESSION['test_array'][$i]['name'];
            $description = $_SESSION['test_array'][$i]['description'];
            $price = $_SESSION['test_array'][$i]['price'];
            $image = $_SESSION['test_array'][$i]['image'];
            

            echo "<br><br>";
            echo '<input type="checkbox" name="items[]" value="'.$name.'">';
            
            echo $name . "<br>";
            echo $price . " PHP <br>";
            echo $description . "<br>";
            echo '<img src="'.$imgPath.$image.'" height="200">';
            }
        ?>
        <br>
        <input type="submit" value="Submit">
</form>

<?php

include_once('templates/footer.php');
?>