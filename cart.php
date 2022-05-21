<?php
$PageTitle="Shopping Cart";
include_once('templates/header.php'); 
include_once('items.php');

$items = $_POST['items'];
$arrLength = count($items);

echo "CART";
echo "<br>";
for($i = 0; $i <= $arrLength-1; $i++){
    echo $items[$i];
    echo "<br>";
}
?>


<?php
include_once('templates/footer.php');
?>