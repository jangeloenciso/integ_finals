<?php
function welcomeMsg($name){
  echo "<h2>Welcome, " . $name . "</h2>"; 
};

function getItem($name, $price, $description, $imgPath, $image){
  echo "<br><br>";

  
  echo $name . "<br>";
  echo $price . " PHP <br>";
  echo $description . "<br>";
  echo '<img src="'.$imgPath.$image.'" height="200"> <br>';
  echo '<input type="checkbox" name="items[]" value="'.$name.'">' . "Add to cart <br>";
  echo "Quantity: <input type=\"number\" step=\"0\" min=\"0\">"; 
};
?>