<?php
$PageTitle="LaZhopee - Home";
include_once('header.php'); 
include_once('items.php');

$_SESSION['username'] = "ker";
$_SESSION['test_array'] = $array;
$arrLength = count($array);
$imgPath = "/static/images/"
?>

<form action="cart.php" method="post">
    <?php 
        for($i = 0; $i <= $arrLength-1; $i++){
            $name=$_SESSION['test_array'][$i]['name'];
            $description=$_SESSION['test_array'][$i]['description'];
            $image = $_SESSION['test_array'][$i]['image'];
    ?>      
        <input type="checkbox" name="items[]" value="<?php $name ?>">
        <?php
            echo $name . " ";
            echo $description . " ";
            echo "<br>";
            echo '<img src="'.$imgPath.$image.'" height="200">';
            }
        ?>

        <input type="submit" value="Submit">
</form>

<?php

include_once('footer.php');
?>